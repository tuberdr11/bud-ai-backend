<?php
/**
 * California Neighborhoods Merge Example
 *
 * This demonstrates how to merge california-neighborhoods.php
 * with your main california state pack file.
 */

// ============================================================
// LOAD THE SEPARATED NEIGHBORHOODS
// ============================================================
$california_neighborhoods = include('california-neighborhoods.php');


// ============================================================
// EXAMPLE MAIN CALIFORNIA CITIES ARRAY (SIMPLIFIED)
// ============================================================
// This is what your main california.php should look like after cleanup:
// - Remove all 'neighborhood_data' arrays
// - Keep only city-level info + neighborhood slug list

$california_cities = array(

  'los-angeles' => array(
    'name' => 'Los Angeles',
    'slug' => 'los-angeles',
    'county' => 'Los Angeles County',
    'overview' => 'LA is the largest cannabis market in California...',
    'legal_status' => 'Adult use legal. Licensed dispensaries and delivery.',
    'key_regulations' => 'Must be 21+. No public consumption...',

    // List of neighborhood slugs (not full data)
    'neighborhoods' => array(
      'downtown-la', 'hollywood', 'west-hollywood', 'venice',
      'santa-monica', 'silver-lake', 'north-hollywood', 'studio-city',
      'sherman-oaks', 'woodland-hills', 'van-nuys', 'burbank',
      'pasadena', 'long-beach', 'inglewood'
    ),
  ),

  'san-francisco' => array(
    'name' => 'San Francisco',
    'slug' => 'san-francisco',
    'county' => 'San Francisco County',
    'overview' => 'SF has deep cannabis roots...',
    'legal_status' => 'Adult use legal. Licensed dispensaries and delivery.',
    'key_regulations' => 'Must be 21+. No public consumption...',

    'neighborhoods' => array(
      'soma', 'mission', 'castro', 'haight-ashbury',
      'marina', 'sunset', 'downtown-sf'
    ),
  ),

  'san-diego' => array(
    'name' => 'San Diego',
    'slug' => 'san-diego',
    'county' => 'San Diego County',
    'overview' => 'SD has a thriving cannabis scene...',
    'legal_status' => 'Adult use legal. Licensed dispensaries and delivery.',

    'neighborhoods' => array(
      'downtown-sd', 'pacific-beach', 'ocean-beach', 'la-jolla',
      'hillcrest', 'north-park', 'mission-valley', 'chula-vista', 'oceanside'
    ),
  ),

  // ... more cities would continue here
);


// ============================================================
// METHOD 1: MERGE NEIGHBORHOODS INTO CITY ARRAY
// ============================================================
function merge_neighborhoods_into_cities(&$cities, $neighborhoods) {
  foreach ($cities as $city_slug => &$city) {
    if (isset($neighborhoods[$city_slug])) {
      // Add full neighborhood data to each city
      $city['neighborhood_data'] = $neighborhoods[$city_slug];
    }
  }
}

// Apply the merge
merge_neighborhoods_into_cities($california_cities, $california_neighborhoods);

// Now each city has its neighborhood_data array populated
// Example access:
// $downtown_la = $california_cities['los-angeles']['neighborhood_data']['downtown-la'];


// ============================================================
// METHOD 2: HELPER FUNCTION FOR ON-DEMAND ACCESS
// ============================================================
function get_neighborhood_data($city_slug, $neighborhood_slug) {
  global $california_neighborhoods;

  if (isset($california_neighborhoods[$city_slug][$neighborhood_slug])) {
    return $california_neighborhoods[$city_slug][$neighborhood_slug];
  }

  return null;
}

// Example usage:
$hollywood_data = get_neighborhood_data('los-angeles', 'hollywood');
if ($hollywood_data) {
  echo $hollywood_data['overview'];
  echo $hollywood_data['price_reality'];
  // ... etc
}


// ============================================================
// METHOD 3: GET ALL NEIGHBORHOODS FOR A CITY
// ============================================================
function get_city_neighborhoods($city_slug) {
  global $california_neighborhoods;
  return isset($california_neighborhoods[$city_slug])
    ? $california_neighborhoods[$city_slug]
    : array();
}

// Example usage:
$sf_neighborhoods = get_city_neighborhoods('san-francisco');
foreach ($sf_neighborhoods as $neighborhood_slug => $neighborhood_data) {
  echo $neighborhood_data['overview'] . "\n";
}


// ============================================================
// METHOD 4: LAZY LOADING (BEST PERFORMANCE)
// ============================================================
function get_california_neighborhoods($city_slug = null, $neighborhood_slug = null) {
  static $neighborhoods = null;

  // Load once and cache in static variable
  if ($neighborhoods === null) {
    $neighborhoods = include('california-neighborhoods.php');
  }

  // Return specific neighborhood
  if ($city_slug && $neighborhood_slug) {
    return isset($neighborhoods[$city_slug][$neighborhood_slug])
      ? $neighborhoods[$city_slug][$neighborhood_slug]
      : null;
  }

  // Return all neighborhoods for a city
  if ($city_slug) {
    return isset($neighborhoods[$city_slug])
      ? $neighborhoods[$city_slug]
      : array();
  }

  // Return everything
  return $neighborhoods;
}

// Example usage:
$all_data = get_california_neighborhoods(); // All cities
$la_data = get_california_neighborhoods('los-angeles'); // All LA neighborhoods
$venice = get_california_neighborhoods('los-angeles', 'venice'); // Specific neighborhood


// ============================================================
// EXAMPLE: DISPLAYING NEIGHBORHOOD DATA
// ============================================================
echo "=== EXAMPLE OUTPUT ===\n\n";

// Get Hollywood data
$hollywood = get_neighborhood_data('los-angeles', 'hollywood');
if ($hollywood) {
  echo "Hollywood Overview:\n";
  echo $hollywood['overview'] . "\n\n";
  echo "Price Reality: " . $hollywood['price_reality'] . "\n";
  echo "Delivery Info: " . $hollywood['delivery_explainer'] . "\n\n";

  if (isset($hollywood['faq']) && count($hollywood['faq']) > 0) {
    echo "FAQ:\n";
    foreach ($hollywood['faq'] as $faq_item) {
      echo "Q: " . $faq_item['q'] . "\n";
      echo "A: " . $faq_item['a'] . "\n\n";
    }
  }
}


// ============================================================
// YOUR ACTUAL USE CASE
// ============================================================
// In your real california.php or california-state-pack.php:
//
// 1. Load neighborhoods at the top:
//    $california_neighborhoods = include('california-neighborhoods.php');
//
// 2. Either merge immediately:
//    merge_neighborhoods_into_cities($california_cities, $california_neighborhoods);
//    return $california_cities;
//
// 3. Or use helper functions throughout your templates/pages:
//    $neighborhood = get_california_neighborhoods('los-angeles', 'downtown-la');
//    echo $neighborhood['overview'];
//
