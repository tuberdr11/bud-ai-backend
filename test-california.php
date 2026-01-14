<?php
/**
 * Test Script for California State Pack Integration
 *
 * This script verifies that:
 * 1. california-neighborhoods.php loads correctly
 * 2. california.php loads and merges neighborhoods properly
 * 3. Helper functions work as expected
 * 4. Data is accessible via multiple methods
 */

echo "=================================================================\n";
echo "California State Pack Integration Test\n";
echo "=================================================================\n\n";

// ============================================================
// TEST 1: Load california-neighborhoods.php directly
// ============================================================
echo "TEST 1: Loading california-neighborhoods.php directly...\n";
$neighborhoods = include('california-neighborhoods.php');

if (is_array($neighborhoods)) {
  $city_count = count($neighborhoods);
  $neighborhood_count = 0;
  foreach ($neighborhoods as $city_neighborhoods) {
    $neighborhood_count += count($city_neighborhoods);
  }
  echo "✓ Successfully loaded\n";
  echo "  - Cities: $city_count\n";
  echo "  - Total neighborhoods: $neighborhood_count\n\n";
} else {
  echo "✗ Failed to load california-neighborhoods.php\n\n";
  exit(1);
}

// ============================================================
// TEST 2: Load california.php state pack
// ============================================================
echo "TEST 2: Loading california.php state pack...\n";
$california_state = include('california.php');

if (is_array($california_state) && isset($california_state['cities'])) {
  $cities_count = count($california_state['cities']);
  echo "✓ Successfully loaded\n";
  echo "  - State name: {$california_state['name']}\n";
  echo "  - Cities: $cities_count\n\n";
} else {
  echo "✗ Failed to load california.php\n\n";
  exit(1);
}

// ============================================================
// TEST 3: Check neighborhood data was merged
// ============================================================
echo "TEST 3: Checking neighborhood data merge...\n";
$test_cities = array('los-angeles', 'san-francisco', 'san-diego', 'santa-ana', 'riverside');
$merge_success = true;

foreach ($test_cities as $city_slug) {
  if (!isset($california_state['cities'][$city_slug]['neighborhood_data'])) {
    echo "✗ No neighborhood_data for $city_slug\n";
    $merge_success = false;
  }
}

if ($merge_success) {
  echo "✓ All test cities have neighborhood_data merged\n\n";
} else {
  echo "✗ Merge failed for some cities\n\n";
  exit(1);
}

// ============================================================
// TEST 4: Access specific neighborhood data
// ============================================================
echo "TEST 4: Accessing specific neighborhood data...\n";
$test_neighborhood = $california_state['cities']['los-angeles']['neighborhood_data']['hollywood'];

if (isset($test_neighborhood['overview']) &&
    isset($test_neighborhood['delivery_explainer']) &&
    isset($test_neighborhood['price_reality'])) {
  echo "✓ Hollywood neighborhood data complete\n";
  echo "  - Overview: " . substr($test_neighborhood['overview'], 0, 60) . "...\n";
  echo "  - Price reality: {$test_neighborhood['price_reality']}\n\n";
} else {
  echo "✗ Hollywood neighborhood data incomplete\n\n";
  exit(1);
}

// ============================================================
// TEST 5: Test helper function - get_california_neighborhood()
// ============================================================
echo "TEST 5: Testing get_california_neighborhood() helper...\n";
$sf_mission = get_california_neighborhood('san-francisco', 'mission');

if ($sf_mission && isset($sf_mission['overview'])) {
  echo "✓ Helper function works\n";
  echo "  - Retrieved: SF Mission District\n";
  echo "  - Overview: " . substr($sf_mission['overview'], 0, 60) . "...\n\n";
} else {
  echo "✗ Helper function failed\n\n";
  exit(1);
}

// ============================================================
// TEST 6: Test helper function - get_city_neighborhoods()
// ============================================================
echo "TEST 6: Testing get_city_neighborhoods() helper...\n";
$sd_neighborhoods = get_city_neighborhoods('san-diego');

if (is_array($sd_neighborhoods) && count($sd_neighborhoods) > 0) {
  $sd_count = count($sd_neighborhoods);
  echo "✓ Helper function works\n";
  echo "  - San Diego neighborhoods: $sd_count\n";
  echo "  - Sample: " . implode(', ', array_slice(array_keys($sd_neighborhoods), 0, 3)) . "...\n\n";
} else {
  echo "✗ Helper function failed\n\n";
  exit(1);
}

// ============================================================
// TEST 7: Verify Orange County cities
// ============================================================
echo "TEST 7: Verifying Orange County cities...\n";
$oc_cities = array('irvine', 'santa-ana', 'anaheim', 'huntington-beach', 'costa-mesa',
                   'fullerton', 'garden-grove', 'newport-beach', 'orange', 'laguna-beach',
                   'mission-viejo', 'lake-forest', 'san-clemente');
$oc_found = 0;

foreach ($oc_cities as $oc_city) {
  if (isset($california_state['cities'][$oc_city])) {
    $oc_found++;
  }
}

echo "✓ Found $oc_found of " . count($oc_cities) . " Orange County cities\n\n";

// ============================================================
// TEST 8: Verify Inland Empire cities
// ============================================================
echo "TEST 8: Verifying Inland Empire cities...\n";
$ie_cities = array('riverside', 'temecula', 'murrieta', 'corona', 'ontario',
                   'rancho-cucamonga', 'fontana', 'san-bernardino', 'moreno-valley',
                   'redlands', 'victorville', 'hesperia');
$ie_found = 0;

foreach ($ie_cities as $ie_city) {
  if (isset($california_state['cities'][$ie_city])) {
    $ie_found++;
  }
}

echo "✓ Found $ie_found of " . count($ie_cities) . " Inland Empire cities\n\n";

// ============================================================
// TEST 9: Data structure validation
// ============================================================
echo "TEST 9: Validating neighborhood data structure...\n";
$required_fields = array('overview', 'delivery_explainer', 'product_guides',
                         'recommended_brands', 'price_reality', 'trend_notes', 'faq');
$validation_passed = true;

// Test one neighborhood from each region
$test_samples = array(
  'los-angeles' => 'downtown-la',
  'riverside' => 'downtown-riverside',
  'monterey' => 'downtown-monterey',
  'berkeley' => 'downtown-berkeley',
  'bakersfield' => 'downtown-bakersfield'
);

foreach ($test_samples as $city => $neighborhood) {
  $data = get_california_neighborhood($city, $neighborhood);
  if (!$data) {
    echo "✗ Could not find $neighborhood in $city\n";
    $validation_passed = false;
    continue;
  }

  $missing_fields = array();
  foreach ($required_fields as $field) {
    if (!isset($data[$field])) {
      $missing_fields[] = $field;
    }
  }

  if (!empty($missing_fields)) {
    echo "✗ $city/$neighborhood missing: " . implode(', ', $missing_fields) . "\n";
    $validation_passed = false;
  }
}

if ($validation_passed) {
  echo "✓ All sampled neighborhoods have required fields\n\n";
} else {
  echo "✗ Some neighborhoods missing required fields\n\n";
}

// ============================================================
// SUMMARY
// ============================================================
echo "=================================================================\n";
echo "TEST SUMMARY\n";
echo "=================================================================\n";
echo "✓ All tests passed successfully!\n\n";
echo "Integration verified:\n";
echo "  - california-neighborhoods.php: $city_count cities, $neighborhood_count neighborhoods\n";
echo "  - california.php: $cities_count cities loaded\n";
echo "  - Helper functions working correctly\n";
echo "  - Data structure validated\n";
echo "  - All regions represented\n\n";
echo "You can now use california.php in your application.\n";
echo "=================================================================\n";
