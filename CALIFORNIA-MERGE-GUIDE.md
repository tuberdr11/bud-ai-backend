# California Neighborhoods Separation Guide

## Overview
The California neighborhood data has been extracted into `california-neighborhoods.php` following the same pattern used in your Connecticut implementation.

## Current Status
**Completed:** 24 cities with 90+ neighborhoods extracted
- Los Angeles (15 neighborhoods)
- San Francisco (7 neighborhoods)
- San Diego (9 neighborhoods)
- Oakland (4 neighborhoods)
- San Jose (6 neighborhoods)
- Sacramento (5 neighborhoods)
- Palm Springs (5 neighborhoods)
- Humboldt (3 neighborhoods)
- Fresno (3 neighborhoods)
- Santa Barbara (3 neighborhoods)
- Santa Cruz (2 neighborhoods)
- Orange County (13 cities with 39 neighborhoods total)

**Remaining:** ~30 cities need to be added from your original california.php file

## File Structure

### california-neighborhoods.php
```php
<?php
return array(
  'city-slug' => array(
    'neighborhood-slug' => array(
      'overview' => '...',
      'delivery_explainer' => '...',
      'product_guides' => array(...),
      'recommended_brands' => '...',
      'price_reality' => '...',
      'trend_notes' => '...',
      'faq' => array(...)
    ),
    // ... more neighborhoods
  ),
  // ... more cities
);
```

## How to Merge in Your Main California File

### Option 1: Direct Include (Recommended)
In your main `california.php` file, load and merge the neighborhoods:

```php
<?php
// Load the separated neighborhoods file
$neighborhood_data = include('california-neighborhoods.php');

// Your existing California cities array
$california_cities = array(
  'los-angeles' => array(
    'name' => 'Los Angeles',
    'slug' => 'los-angeles',
    'county' => 'Los Angeles County',
    // ... other city-level data
    'neighborhoods' => array_keys($neighborhood_data['los-angeles']), // List of neighborhood slugs
  ),
  'san-francisco' => array(
    'name' => 'San Francisco',
    'slug' => 'san-francisco',
    // ... other city-level data
    'neighborhoods' => array_keys($neighborhood_data['san-francisco']),
  ),
  // ... more cities
);

// Merge function: get neighborhood data for a specific city/neighborhood
function get_neighborhood_data($city_slug, $neighborhood_slug) {
  global $neighborhood_data;
  return isset($neighborhood_data[$city_slug][$neighborhood_slug])
    ? $neighborhood_data[$city_slug][$neighborhood_slug]
    : null;
}

// Or merge neighborhoods directly into each city
foreach ($california_cities as $city_slug => &$city) {
  if (isset($neighborhood_data[$city_slug])) {
    $city['neighborhood_data'] = $neighborhood_data[$city_slug];
  }
}
```

### Option 2: Lazy Loading (For Performance)
Only load neighborhood data when needed:

```php
<?php
function get_california_neighborhoods($city_slug = null) {
  static $neighborhoods = null;

  // Load once and cache
  if ($neighborhoods === null) {
    $neighborhoods = include('california-neighborhoods.php');
  }

  // Return specific city or all
  if ($city_slug) {
    return isset($neighborhoods[$city_slug]) ? $neighborhoods[$city_slug] : array();
  }
  return $neighborhoods;
}

// Usage
$la_neighborhoods = get_california_neighborhoods('los-angeles');
$downtown_data = $la_neighborhoods['downtown-la'];
```

## Next Steps

### To Complete the Extraction:
1. **Provide the original california.php file** - I need the remaining ~30 cities' neighborhood data to complete the extraction
2. **Cities still needed:**
   - Inland Empire: Riverside, Temecula, Murrieta, Corona, Ontario, Rancho Cucamonga, Fontana, San Bernardino, Moreno Valley, Redlands, Victorville, Hesperia (12 cities)
   - Central Coast: Monterey, Carmel, Salinas, San Luis Obispo, Paso Robles, Ventura, Oxnard (7 cities)
   - Bay Area: Berkeley, Fremont, Santa Rosa, Napa, Walnut Creek, Concord, Hayward (7 cities)
   - Central Valley/North State: Bakersford, Stockton, Modesto, Visalia, Redding, Chico (6 cities)

### Once Extraction is Complete:
1. Clean your main california.php file by removing all `neighborhood_data` arrays
2. Keep only city-level data + `neighborhoods` array (list of slugs)
3. Use one of the merge methods above to combine files at runtime

## Performance Notes
- Current file size: ~1,050 lines (~53KB)
- Expected final size: ~3,500 lines (~150KB)
- OpCache will compile this to bytecode - no performance penalty
- This is equivalent to a small image file in size

## Benefits
✅ Consistent with your Connecticut pattern
✅ Easier to edit city-level vs neighborhood-level content
✅ Main california.php reduced from ~7,000 to ~2,000 lines
✅ No performance impact with OpCache
✅ Better organization and maintainability
