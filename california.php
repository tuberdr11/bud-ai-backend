<?php
/**
 * California State Pack - Cannabis Shopping Guide
 *
 * Neighborhood data has been separated into california-neighborhoods.php
 * for better organization and maintainability.
 */

// ============================================================
// LOAD SEPARATED NEIGHBORHOOD DATA
// ============================================================
$california_neighborhoods = include('california-neighborhoods.php');

// ============================================================
// HELPER FUNCTIONS
// ============================================================

/**
 * Get neighborhood data for a specific city and neighborhood
 *
 * @param string $city_slug City slug (e.g., 'los-angeles')
 * @param string $neighborhood_slug Neighborhood slug (e.g., 'hollywood')
 * @return array|null Neighborhood data or null if not found
 */
function get_california_neighborhood($city_slug, $neighborhood_slug) {
  global $california_neighborhoods;

  if (isset($california_neighborhoods[$city_slug][$neighborhood_slug])) {
    return $california_neighborhoods[$city_slug][$neighborhood_slug];
  }

  return null;
}

/**
 * Get all neighborhoods for a city
 *
 * @param string $city_slug City slug (e.g., 'los-angeles')
 * @return array Array of neighborhoods or empty array
 */
function get_city_neighborhoods($city_slug) {
  global $california_neighborhoods;

  return isset($california_neighborhoods[$city_slug])
    ? $california_neighborhoods[$city_slug]
    : array();
}

/**
 * Merge neighborhood data into cities array
 * Adds 'neighborhood_data' key to each city with full neighborhood information
 *
 * @param array $cities Cities array (passed by reference)
 */
function merge_neighborhoods_into_cities(&$cities) {
  global $california_neighborhoods;

  foreach ($cities as $city_slug => &$city) {
    if (isset($california_neighborhoods[$city_slug])) {
      $city['neighborhood_data'] = $california_neighborhoods[$city_slug];
    }
  }
}

// ============================================================
// CALIFORNIA STATE DATA
// ============================================================

$california_state = array(
  'name' => 'California',
  'slug' => 'california',
  'legal_status' => 'Adult use legal statewide since 2016. Licensed dispensaries and delivery services available.',
  'overview' => 'California is the largest cannabis market in the United States and a global leader in cannabis culture, innovation, and commerce. From the legacy farms of the Emerald Triangle to the tech-savvy dispensaries of San Francisco and the sprawling retail scene in Los Angeles, California offers unparalleled variety, quality, and access.',

  // ============================================================
  // CITIES
  // ============================================================
  'cities' => array(

    // Los Angeles
    'los-angeles' => array(
      'name' => 'Los Angeles',
      'slug' => 'los-angeles',
      'county' => 'Los Angeles County',
      'seo_path' => 'los-angeles-cannabis-shopping-guide',
      'intro' => 'The largest cannabis market in the world. Hundreds of dispensaries, thousands of delivery services, and every product category imaginable.',
      'overview' => 'Los Angeles is the global epicenter of cannabis commerce and culture. With the largest concentration of licensed dispensaries and delivery services in the world, LA offers unparalleled selection across all product categories. From budget-friendly flower to premium concentrates, edibles, and emerging categories like live rosin and strain-specific products, LA sets the trends that the rest of the industry follows. Expect competitive pricing, extensive menus, and knowledgeable staff at most locations.',
      'legal_status' => 'Adult use legal. Must be 21+ with valid ID. Licensed dispensaries and delivery services operate throughout the city.',
      'key_regulations' => 'No public consumption. Keep products in original packaging. DUI laws apply. Respect smoke-free zones.',
      'neighborhoods' => array(
        'downtown-la', 'hollywood', 'west-hollywood', 'venice', 'santa-monica',
        'silver-lake', 'north-hollywood', 'studio-city', 'sherman-oaks',
        'woodland-hills', 'van-nuys', 'burbank', 'pasadena', 'long-beach', 'inglewood'
      ),
    ),

    // San Francisco
    'san-francisco' => array(
      'name' => 'San Francisco',
      'slug' => 'san-francisco',
      'county' => 'San Francisco County',
      'seo_path' => 'san-francisco-cannabis-shopping-guide',
      'intro' => 'Deep cannabis roots, progressive culture, premium products. Expect high quality and high prices.',
      'overview' => 'San Francisco has been at the forefront of cannabis culture since the 1960s. The city offers a mature, sophisticated market with an emphasis on quality over quantity. Dispensaries here tend to be well-curated, staff are highly knowledgeable, and the product selection leans premium. Prices are higher than most other California markets, but the quality and experience reflect that. Delivery is popular and efficient.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery services. Must be 21+ with valid ID.',
      'key_regulations' => 'No public consumption. DUI laws strictly enforced. Respect neighborhood sensitivities.',
      'neighborhoods' => array(
        'soma', 'mission', 'castro', 'haight-ashbury', 'marina', 'sunset', 'downtown-sf'
      ),
    ),

    // San Diego
    'san-diego' => array(
      'name' => 'San Diego',
      'slug' => 'san-diego',
      'county' => 'San Diego County',
      'seo_path' => 'san-diego-cannabis-shopping-guide',
      'intro' => 'Southern California beach culture meets cannabis. Growing dispensary scene, strong delivery options.',
      'overview' => 'San Diego has developed a thriving cannabis market that reflects its laid-back beach culture and proximity to top cultivation regions. The city offers a good mix of mid-tier and premium products, with competitive pricing compared to LA and SF. Delivery services are robust, and brick-and-mortar dispensaries are expanding. Expect friendly service, solid flower selections, and a growing concentrate and edibles scene.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+ with valid ID.',
      'key_regulations' => 'No beach or public consumption. DUI laws enforced. Keep products sealed in vehicles.',
      'neighborhoods' => array(
        'downtown-sd', 'pacific-beach', 'ocean-beach', 'la-jolla', 'hillcrest',
        'north-park', 'mission-valley', 'chula-vista', 'oceanside'
      ),
    ),

    // Oakland
    'oakland' => array(
      'name' => 'Oakland',
      'slug' => 'oakland',
      'county' => 'Alameda County',
      'seo_path' => 'oakland-cannabis-shopping-guide',
      'intro' => 'One of California\'s first cities to permit dispensaries. Strong equity programs and legacy culture.',
      'overview' => 'Oakland has long been a leader in cannabis policy and culture. The city was one of the first in California to license dispensaries and has pioneered social equity programs. Oakland offers a diverse range of products at competitive prices, with a strong emphasis on supporting local and minority-owned businesses. The market here is mature, with knowledgeable staff and well-stocked shelves.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. Respect local ordinances. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-oakland', 'uptown', 'jack-london-square', 'fruitvale'
      ),
    ),

    // San Jose
    'san-jose' => array(
      'name' => 'San Jose',
      'slug' => 'san-jose',
      'county' => 'Santa Clara County',
      'seo_path' => 'san-jose-cannabis-shopping-guide',
      'intro' => 'Silicon Valley\'s cannabis hub. Tech-forward dispensaries, diverse product selection.',
      'overview' => 'San Jose, the heart of Silicon Valley, brings a tech-savvy approach to cannabis retail. Dispensaries here often feature online ordering, efficient pickup systems, and data-driven product recommendations. The market is competitive with good pricing and a wide variety of products. Delivery is popular and reliable.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced. Keep products in original packaging.',
      'neighborhoods' => array(
        'downtown-sj', 'santana-row', 'willow-glen', 'almaden', 'evergreen', 'north-san-jose'
      ),
    ),

    // Sacramento
    'sacramento' => array(
      'name' => 'Sacramento',
      'slug' => 'sacramento',
      'county' => 'Sacramento County',
      'seo_path' => 'sacramento-cannabis-shopping-guide',
      'intro' => 'The state capital. Strong dispensary presence, competitive pricing, proximity to cultivation regions.',
      'overview' => 'As California\'s capital, Sacramento has a well-developed cannabis market with competitive pricing and good selection. The city\'s proximity to Northern California cultivation regions means fresh flower and strong supply chains. Dispensaries range from budget-friendly to premium, and delivery services are widespread.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced. Respect local ordinances.',
      'neighborhoods' => array(
        'downtown-sacramento', 'midtown', 'east-sacramento', 'natomas', 'elk-grove'
      ),
    ),

    // Palm Springs
    'palm-springs' => array(
      'name' => 'Palm Springs',
      'slug' => 'palm-springs',
      'county' => 'Riverside County',
      'seo_path' => 'palm-springs-cannabis-shopping-guide',
      'intro' => 'Desert oasis with a booming cannabis scene. Tourist-friendly dispensaries, resort vibes.',
      'overview' => 'Palm Springs has embraced cannabis tourism with open arms. The city offers a unique desert dispensary experience with upscale retail environments, knowledgeable staff, and products tailored to both locals and visitors. Prices can be higher than inland cities, but the selection is curated for quality.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No consumption in public spaces or resorts. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-palm-springs', 'uptown', 'south-palm-springs', 'cathedral-city', 'desert-hot-springs'
      ),
    ),

    // Humboldt County
    'humboldt' => array(
      'name' => 'Humboldt',
      'slug' => 'humboldt',
      'county' => 'Humboldt County',
      'seo_path' => 'humboldt-cannabis-shopping-guide',
      'intro' => 'The Emerald Triangle\'s crown jewel. Legacy cultivation, world-class flower, deep cannabis roots.',
      'overview' => 'Humboldt County is synonymous with premium cannabis. Part of the legendary Emerald Triangle, Humboldt has been producing world-renowned flower for decades. The local market emphasizes craft cultivation, sun-grown and mixed-light flower, and a deep respect for cannabis tradition. Dispensaries here showcase local farms and legacy genetics.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'Respect cultivation zones. No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'eureka', 'arcata', 'trinidad'
      ),
    ),

    // Fresno
    'fresno' => array(
      'name' => 'Fresno',
      'slug' => 'fresno',
      'county' => 'Fresno County',
      'seo_path' => 'fresno-cannabis-shopping-guide',
      'intro' => 'Central Valley\'s largest cannabis market. Growing dispensary scene, competitive pricing.',
      'overview' => 'Fresno is the Central Valley\'s cannabis hub, offering a growing number of dispensaries and delivery services. The market is competitive with solid pricing and a focus on flower and concentrates. Delivery is popular given the city\'s sprawl.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-fresno', 'tower-district', 'clovis'
      ),
    ),

    // Santa Barbara
    'santa-barbara' => array(
      'name' => 'Santa Barbara',
      'slug' => 'santa-barbara',
      'county' => 'Santa Barbara County',
      'seo_path' => 'santa-barbara-cannabis-shopping-guide',
      'intro' => 'Coastal sophistication meets cannabis. Premium products, tourist-friendly, beautiful dispensaries.',
      'overview' => 'Santa Barbara offers a refined cannabis shopping experience that matches its upscale coastal vibe. Dispensaries are well-designed, staff are knowledgeable, and the product selection leans toward quality over budget options. Expect higher prices but premium experiences.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No beach or public consumption. Respect local ordinances.',
      'neighborhoods' => array(
        'downtown-santa-barbara', 'montecito', 'goleta'
      ),
    ),

    // Santa Cruz
    'santa-cruz' => array(
      'name' => 'Santa Cruz',
      'slug' => 'santa-cruz',
      'county' => 'Santa Cruz County',
      'seo_path' => 'santa-cruz-cannabis-shopping-guide',
      'intro' => 'Beach town with deep cannabis roots. Progressive culture, quality-focused dispensaries.',
      'overview' => 'Santa Cruz has a long history with cannabis, dating back to early medical marijuana activism. The market here is mature and quality-focused, with dispensaries offering well-curated selections and knowledgeable staff. Prices are moderate to high.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No beach or public consumption. Respect local ordinances.',
      'neighborhoods' => array(
        'downtown-santa-cruz', 'capitola'
      ),
    ),

    // Riverside
    'riverside' => array(
      'name' => 'Riverside',
      'slug' => 'riverside',
      'county' => 'Riverside County',
      'seo_path' => 'riverside-cannabis-shopping-guide',
      'intro' => 'The heart of the Inland Empire. Expanding cannabis market, competitive pricing, diverse options.',
      'overview' => 'Riverside is the largest city in the Inland Empire and a growing cannabis market. The city offers competitive pricing, a mix of budget and mid-tier products, and expanding retail options. Delivery is robust given the area\'s size and sprawl.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-riverside', 'ucr-area', 'canyon-crest', 'riverside-plaza', 'arlington'
      ),
    ),

    // Temecula
    'temecula' => array(
      'name' => 'Temecula',
      'slug' => 'temecula',
      'county' => 'Riverside County',
      'seo_path' => 'temecula-cannabis-shopping-guide',
      'intro' => 'Wine country meets cannabis. Growing retail scene, tourist-friendly.',
      'overview' => 'Temecula, known for its wineries, is developing a cannabis market that caters to both locals and tourists. Dispensaries offer a range of products with competitive pricing.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. Respect local ordinances.',
      'neighborhoods' => array(
        'old-town-temecula', 'french-valley', 'wolf-creek', 'harveston', 'south-temecula'
      ),
    ),

    // Murrieta
    'murrieta' => array(
      'name' => 'Murrieta',
      'slug' => 'murrieta',
      'county' => 'Riverside County',
      'seo_path' => 'murrieta-cannabis-shopping-guide',
      'intro' => 'Family-friendly city with emerging cannabis retail. Delivery-focused market.',
      'overview' => 'Murrieta has a developing cannabis market, with delivery services being the primary access point. The market is competitive with solid pricing.',
      'legal_status' => 'Adult use legal. Delivery services available. Check local dispensary regulations.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'murrieta-town-center', 'greer-ranch', 'la-cresta'
      ),
    ),

    // Corona
    'corona' => array(
      'name' => 'Corona',
      'slug' => 'corona',
      'county' => 'Riverside County',
      'seo_path' => 'corona-cannabis-shopping-guide',
      'intro' => 'Circle City cannabis. Growing dispensary presence, competitive IE pricing.',
      'overview' => 'Corona offers a growing cannabis market with competitive Inland Empire pricing and expanding retail options. Delivery is widely available.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-corona', 'corona-hills', 'dos-lagos', 'north-corona'
      ),
    ),

    // Ontario
    'ontario' => array(
      'name' => 'Ontario',
      'slug' => 'ontario',
      'county' => 'San Bernardino County',
      'seo_path' => 'ontario-cannabis-shopping-guide',
      'intro' => 'Major Inland Empire hub. Airport proximity, diverse retail, strong delivery network.',
      'overview' => 'Ontario is a key Inland Empire city with a well-developed cannabis market. Dispensaries and delivery services are abundant, with competitive pricing and diverse product selections.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'ontario-mills', 'ontario-ranch', 'airport-area', 'downtown-ontario'
      ),
    ),

    // Rancho Cucamonga
    'rancho-cucamonga' => array(
      'name' => 'Rancho Cucamonga',
      'slug' => 'rancho-cucamonga',
      'county' => 'San Bernardino County',
      'seo_path' => 'rancho-cucamonga-cannabis-shopping-guide',
      'intro' => 'Suburban IE city with growing cannabis retail. Family-oriented market.',
      'overview' => 'Rancho Cucamonga offers a suburban cannabis shopping experience with a mix of dispensaries and delivery services. Pricing is competitive and selection is solid.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'victoria-gardens', 'terra-vista', 'etiwanda', 'rancho-town-center'
      ),
    ),

    // Fontana
    'fontana' => array(
      'name' => 'Fontana',
      'slug' => 'fontana',
      'county' => 'San Bernardino County',
      'seo_path' => 'fontana-cannabis-shopping-guide',
      'intro' => 'Fast-growing IE city. Expanding cannabis retail, budget-friendly options.',
      'overview' => 'Fontana is seeing rapid growth in its cannabis market, with new dispensaries and delivery services. Prices tend to be budget-friendly with solid variety.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'south-fontana', 'sierra-fontana', 'north-fontana'
      ),
    ),

    // San Bernardino
    'san-bernardino' => array(
      'name' => 'San Bernardino',
      'slug' => 'san-bernardino',
      'county' => 'San Bernardino County',
      'seo_path' => 'san-bernardino-cannabis-shopping-guide',
      'intro' => 'Historic IE city. Established cannabis market, competitive pricing, diverse options.',
      'overview' => 'San Bernardino has a mature cannabis market with numerous dispensaries and delivery services. Pricing is competitive and product variety is strong.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-san-bernardino', 'arrowhead-area', 'north-san-bernardino'
      ),
    ),

    // Moreno Valley
    'moreno-valley' => array(
      'name' => 'Moreno Valley',
      'slug' => 'moreno-valley',
      'county' => 'Riverside County',
      'seo_path' => 'moreno-valley-cannabis-shopping-guide',
      'intro' => 'Large IE city with developing cannabis retail. Delivery-focused.',
      'overview' => 'Moreno Valley has a growing cannabis market with strong delivery services and expanding retail. Prices are competitive.',
      'legal_status' => 'Adult use legal. Delivery services and licensed dispensaries. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'towngate', 'moreno-valley-ranch', 'box-springs'
      ),
    ),

    // Redlands
    'redlands' => array(
      'name' => 'Redlands',
      'slug' => 'redlands',
      'county' => 'San Bernardino County',
      'seo_path' => 'redlands-cannabis-shopping-guide',
      'intro' => 'Historic university town. Emerging cannabis market, quality-focused.',
      'overview' => 'Redlands offers a developing cannabis market with a focus on quality products and knowledgeable service. Delivery is available.',
      'legal_status' => 'Adult use legal. Check local dispensary regulations. Delivery available.',
      'key_regulations' => 'No public consumption. Respect university zones.',
      'neighborhoods' => array(
        'downtown-redlands', 'redlands-university', 'south-redlands'
      ),
    ),

    // Victorville
    'victorville' => array(
      'name' => 'Victorville',
      'slug' => 'victorville',
      'county' => 'San Bernardino County',
      'seo_path' => 'victorville-cannabis-shopping-guide',
      'intro' => 'High Desert cannabis hub. Competitive pricing, diverse retail.',
      'overview' => 'Victorville serves the High Desert region with a solid cannabis market. Dispensaries offer competitive pricing and good variety.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'old-town-victorville', 'spring-valley-lake', 'victorville-mall-area'
      ),
    ),

    // Hesperia
    'hesperia' => array(
      'name' => 'Hesperia',
      'slug' => 'hesperia',
      'county' => 'San Bernardino County',
      'seo_path' => 'hesperia-cannabis-shopping-guide',
      'intro' => 'High Desert city. Growing cannabis market, competitive pricing.',
      'overview' => 'Hesperia has a developing cannabis retail scene with competitive pricing and expanding delivery options.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'hesperia-main', 'lake-arrowhead-area', 'south-hesperia'
      ),
    ),

    // Monterey
    'monterey' => array(
      'name' => 'Monterey',
      'slug' => 'monterey',
      'county' => 'Monterey County',
      'seo_path' => 'monterey-cannabis-shopping-guide',
      'intro' => 'Coastal gem. Tourist-friendly cannabis retail, premium products, scenic dispensaries.',
      'overview' => 'Monterey offers a refined cannabis experience that caters to both locals and tourists. Dispensaries are well-appointed, product selection emphasizes quality, and prices reflect the coastal premium.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. Respect tourist areas.',
      'neighborhoods' => array(
        'downtown-monterey', 'cannery-row', 'seaside', 'marina'
      ),
    ),

    // Carmel
    'carmel' => array(
      'name' => 'Carmel',
      'slug' => 'carmel',
      'county' => 'Monterey County',
      'seo_path' => 'carmel-cannabis-shopping-guide',
      'intro' => 'Upscale coastal enclave. Limited retail, delivery preferred, premium products.',
      'overview' => 'Carmel has limited dispensary presence, with delivery being the primary access method. Products lean premium, and prices are high.',
      'legal_status' => 'Adult use legal. Delivery services available. Check local regulations.',
      'key_regulations' => 'No public consumption. Respect local ordinances.',
      'neighborhoods' => array(
        'carmel-by-the-sea', 'carmel-valley'
      ),
    ),

    // Salinas
    'salinas' => array(
      'name' => 'Salinas',
      'slug' => 'salinas',
      'county' => 'Monterey County',
      'seo_path' => 'salinas-cannabis-shopping-guide',
      'intro' => 'Agricultural heart of Monterey County. Growing cannabis market, competitive pricing.',
      'overview' => 'Salinas has a developing cannabis market with competitive pricing and solid product variety. Dispensaries serve both locals and Central Coast visitors.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-salinas', 'alisal', 'north-salinas'
      ),
    ),

    // San Luis Obispo
    'san-luis-obispo' => array(
      'name' => 'San Luis Obispo',
      'slug' => 'san-luis-obispo',
      'county' => 'San Luis Obispo County',
      'seo_path' => 'san-luis-obispo-cannabis-shopping-guide',
      'intro' => 'College town charm. Progressive cannabis culture, quality products, student-friendly pricing.',
      'overview' => 'San Luis Obispo blends college town energy with Central Coast sophistication. Dispensaries offer a mix of budget and premium products, with knowledgeable staff and welcoming atmospheres.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No campus consumption. Respect university zones.',
      'neighborhoods' => array(
        'downtown-slo', 'cal-poly-area', 'south-slo'
      ),
    ),

    // Paso Robles
    'paso-robles' => array(
      'name' => 'Paso Robles',
      'slug' => 'paso-robles',
      'county' => 'San Luis Obispo County',
      'seo_path' => 'paso-robles-cannabis-shopping-guide',
      'intro' => 'Wine country cannabis. Emerging market, tourist-friendly, quality focus.',
      'overview' => 'Paso Robles, known for its wineries, is building a cannabis market that mirrors its wine country sophistication. Dispensaries emphasize quality and cater to tourists.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. Respect wine country zones.',
      'neighborhoods' => array(
        'downtown-paso-robles', 'west-paso'
      ),
    ),

    // Ventura
    'ventura' => array(
      'name' => 'Ventura',
      'slug' => 'ventura',
      'county' => 'Ventura County',
      'seo_path' => 'ventura-cannabis-shopping-guide',
      'intro' => 'Coastal city with solid cannabis market. Competitive pricing, beach-town vibes.',
      'overview' => 'Ventura offers a well-developed cannabis market with good pricing and a laid-back coastal atmosphere. Dispensaries are plentiful, and delivery is robust.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No beach consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-ventura', 'midtown-ventura', 'ventura-pier-area'
      ),
    ),

    // Oxnard
    'oxnard' => array(
      'name' => 'Oxnard',
      'slug' => 'oxnard',
      'county' => 'Ventura County',
      'seo_path' => 'oxnard-cannabis-shopping-guide',
      'intro' => 'Ventura County\'s largest city. Expanding cannabis retail, competitive pricing.',
      'overview' => 'Oxnard has a growing cannabis market with competitive pricing and diverse product offerings. Delivery services are strong.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-oxnard', 'oxnard-shores', 'north-oxnard'
      ),
    ),

    // Berkeley
    'berkeley' => array(
      'name' => 'Berkeley',
      'slug' => 'berkeley',
      'county' => 'Alameda County',
      'seo_path' => 'berkeley-cannabis-shopping-guide',
      'intro' => 'Progressive pioneer. Long cannabis history, quality-focused dispensaries, equity programs.',
      'overview' => 'Berkeley has been at the forefront of cannabis culture and policy for decades. The city offers a mature, sophisticated market with an emphasis on quality, social equity, and education. Dispensaries are well-curated and staff are highly knowledgeable.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No campus consumption. Respect university zones.',
      'neighborhoods' => array(
        'downtown-berkeley', 'telegraph-avenue', 'north-berkeley', 'south-berkeley'
      ),
    ),

    // Fremont
    'fremont' => array(
      'name' => 'Fremont',
      'slug' => 'fremont',
      'county' => 'Alameda County',
      'seo_path' => 'fremont-cannabis-shopping-guide',
      'intro' => 'South Bay hub. Growing cannabis market, competitive pricing, diverse community.',
      'overview' => 'Fremont offers a developing cannabis market with competitive Bay Area pricing and expanding retail options. Delivery is widely available.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'fremont-hub', 'mission-san-jose', 'niles'
      ),
    ),

    // Santa Rosa
    'santa-rosa' => array(
      'name' => 'Santa Rosa',
      'slug' => 'santa-rosa',
      'county' => 'Sonoma County',
      'seo_path' => 'santa-rosa-cannabis-shopping-guide',
      'intro' => 'Wine country meets cannabis. Proximity to cultivation, quality products, tourist-friendly.',
      'overview' => 'Santa Rosa, the heart of Sonoma County wine country, offers a cannabis market that emphasizes quality and local cultivation. Dispensaries are well-stocked and cater to both locals and tourists.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. Respect wine country zones.',
      'neighborhoods' => array(
        'downtown-santa-rosa', 'railroad-square', 'rincon-valley'
      ),
    ),

    // Napa
    'napa' => array(
      'name' => 'Napa',
      'slug' => 'napa',
      'county' => 'Napa County',
      'seo_path' => 'napa-cannabis-shopping-guide',
      'intro' => 'World-famous wine region. Premium cannabis market, tourist-oriented, high prices.',
      'overview' => 'Napa offers a refined cannabis experience that mirrors its world-class wine scene. Dispensaries are upscale, product selection is premium, and prices reflect the luxury market.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. Respect wine country sensitivities.',
      'neighborhoods' => array(
        'downtown-napa', 'napa-valley', 'yountville'
      ),
    ),

    // Walnut Creek
    'walnut-creek' => array(
      'name' => 'Walnut Creek',
      'slug' => 'walnut-creek',
      'county' => 'Contra Costa County',
      'seo_path' => 'walnut-creek-cannabis-shopping-guide',
      'intro' => 'East Bay affluence. Premium cannabis market, upscale dispensaries.',
      'overview' => 'Walnut Creek offers an upscale cannabis shopping experience with premium products and well-appointed dispensaries. Prices are higher than average but reflect the quality and service.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-walnut-creek', 'north-walnut-creek', 'south-walnut-creek'
      ),
    ),

    // Concord
    'concord' => array(
      'name' => 'Concord',
      'slug' => 'concord',
      'county' => 'Contra Costa County',
      'seo_path' => 'concord-cannabis-shopping-guide',
      'intro' => 'East Bay city. Growing cannabis market, competitive pricing.',
      'overview' => 'Concord has a developing cannabis market with competitive pricing and expanding retail options. Delivery services are robust.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-concord', 'todos-santos', 'north-concord'
      ),
    ),

    // Hayward
    'hayward' => array(
      'name' => 'Hayward',
      'slug' => 'hayward',
      'county' => 'Alameda County',
      'seo_path' => 'hayward-cannabis-shopping-guide',
      'intro' => 'East Bay hub. Solid cannabis market, competitive pricing, diverse community.',
      'overview' => 'Hayward offers a well-established cannabis market with competitive pricing and good product variety. Dispensaries and delivery services are plentiful.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-hayward', 'southland-mall-area', 'mission-area'
      ),
    ),

    // Bakersfield
    'bakersfield' => array(
      'name' => 'Bakersfield',
      'slug' => 'bakersfield',
      'county' => 'Kern County',
      'seo_path' => 'bakersfield-cannabis-shopping-guide',
      'intro' => 'Central Valley\'s southern anchor. Growing cannabis market, budget-friendly options.',
      'overview' => 'Bakersfield has a developing cannabis market with competitive pricing and expanding retail. Delivery is widely available.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-bakersfield', 'east-bakersfield', 'southwest-bakersfield', 'north-bakersfield'
      ),
    ),

    // Stockton
    'stockton' => array(
      'name' => 'Stockton',
      'slug' => 'stockton',
      'county' => 'San Joaquin County',
      'seo_path' => 'stockton-cannabis-shopping-guide',
      'intro' => 'Central Valley port city. Established cannabis market, competitive pricing.',
      'overview' => 'Stockton offers a mature cannabis market with competitive pricing and diverse product selections. Dispensaries and delivery services are plentiful.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-stockton', 'lincoln-center', 'north-stockton'
      ),
    ),

    // Modesto
    'modesto' => array(
      'name' => 'Modesto',
      'slug' => 'modesto',
      'county' => 'Stanislaus County',
      'seo_path' => 'modesto-cannabis-shopping-guide',
      'intro' => 'Central Valley city. Growing cannabis market, budget-friendly pricing.',
      'overview' => 'Modesto has a developing cannabis market with competitive pricing and expanding retail. Delivery is robust.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-modesto', 'village-one', 'north-modesto'
      ),
    ),

    // Visalia
    'visalia' => array(
      'name' => 'Visalia',
      'slug' => 'visalia',
      'county' => 'Tulare County',
      'seo_path' => 'visalia-cannabis-shopping-guide',
      'intro' => 'Southern Central Valley. Emerging cannabis market, competitive pricing.',
      'overview' => 'Visalia offers a growing cannabis market with competitive pricing and expanding options. Delivery services are available.',
      'legal_status' => 'Adult use legal. Check local dispensary regulations. Delivery available.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-visalia', 'mooney-boulevard-area', 'north-visalia'
      ),
    ),

    // Redding
    'redding' => array(
      'name' => 'Redding',
      'slug' => 'redding',
      'county' => 'Shasta County',
      'seo_path' => 'redding-cannabis-shopping-guide',
      'intro' => 'Northern California hub. Developing cannabis market, competitive pricing.',
      'overview' => 'Redding serves as the cannabis hub for far Northern California. The market is developing with competitive pricing and growing retail options.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-redding', 'south-redding', 'enterprise-area'
      ),
    ),

    // Chico
    'chico' => array(
      'name' => 'Chico',
      'slug' => 'chico',
      'county' => 'Butte County',
      'seo_path' => 'chico-cannabis-shopping-guide',
      'intro' => 'College town in the North State. Progressive cannabis culture, student-friendly pricing.',
      'overview' => 'Chico blends college town energy with Northern California cannabis culture. Dispensaries offer competitive pricing and cater to both students and locals.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No campus consumption. Respect university zones.',
      'neighborhoods' => array(
        'downtown-chico', 'chico-state-area', 'north-chico'
      ),
    ),

    // Orange County Cities
    'irvine' => array(
      'name' => 'Irvine',
      'slug' => 'irvine',
      'county' => 'Orange County',
      'seo_path' => 'irvine-cannabis-shopping-guide',
      'intro' => 'Planned city perfection. Limited retail, delivery-focused, premium products.',
      'overview' => 'Irvine has limited dispensary presence due to local regulations. Delivery services dominate the market, offering premium products at competitive prices.',
      'legal_status' => 'Adult use legal. Delivery services widely available. Check local dispensary regulations.',
      'key_regulations' => 'No public consumption. Respect residential zones.',
      'neighborhoods' => array(
        'irvine-spectrum', 'university-hills', 'woodbridge'
      ),
    ),

    'santa-ana' => array(
      'name' => 'Santa Ana',
      'slug' => 'santa-ana',
      'county' => 'Orange County',
      'seo_path' => 'santa-ana-cannabis-shopping-guide',
      'intro' => 'OC\'s cannabis capital. Most dispensaries in Orange County, diverse pricing, huge selection.',
      'overview' => 'Santa Ana is the undisputed cannabis retail leader in Orange County, with the highest concentration of dispensaries in the region. Competitive pricing, vast selection, and diverse retail experiences make it a destination for OC cannabis shoppers.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-santa-ana', 'westminster-corridor', 'south-coast-metro'
      ),
    ),

    'anaheim' => array(
      'name' => 'Anaheim',
      'slug' => 'anaheim',
      'county' => 'Orange County',
      'seo_path' => 'anaheim-cannabis-shopping-guide',
      'intro' => 'Home of Disneyland. Limited dispensaries, delivery-heavy market, tourist-friendly.',
      'overview' => 'Anaheim has a limited number of dispensaries but robust delivery services. The market caters to both locals and tourists, with convenient options near major attractions.',
      'legal_status' => 'Adult use legal. Delivery services and limited dispensaries. Must be 21+.',
      'key_regulations' => 'No consumption in public or theme park areas.',
      'neighborhoods' => array(
        'anaheim-resort-area', 'anaheim-hills', 'west-anaheim'
      ),
    ),

    'huntington-beach' => array(
      'name' => 'Huntington Beach',
      'slug' => 'huntington-beach',
      'county' => 'Orange County',
      'seo_path' => 'huntington-beach-cannabis-shopping-guide',
      'intro' => 'Surf City USA. Limited local retail, delivery-focused, beach town vibes.',
      'overview' => 'Huntington Beach has limited dispensary presence due to local regulations. Delivery services are the primary access point, offering a wide range of products.',
      'legal_status' => 'Adult use legal. Delivery services available. Check local dispensary regulations.',
      'key_regulations' => 'No beach consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'downtown-hb', 'huntington-harbour', 'pacific-city'
      ),
    ),

    'costa-mesa' => array(
      'name' => 'Costa Mesa',
      'slug' => 'costa-mesa',
      'county' => 'Orange County',
      'seo_path' => 'costa-mesa-cannabis-shopping-guide',
      'intro' => 'Central OC hub. Growing dispensary scene, competitive pricing, arts district vibes.',
      'overview' => 'Costa Mesa is developing a solid cannabis retail presence with competitive pricing and convenient delivery. The city\'s arts and culture scene is reflected in progressive dispensaries.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'south-coast-plaza-area', 'costa-mesa-lab', 'newport-blvd-corridor'
      ),
    ),

    'fullerton' => array(
      'name' => 'Fullerton',
      'slug' => 'fullerton',
      'county' => 'Orange County',
      'seo_path' => 'fullerton-cannabis-shopping-guide',
      'intro' => 'College town energy. Limited retail, delivery-focused, student-friendly.',
      'overview' => 'Fullerton has limited dispensary presence but strong delivery services. The market caters to both students and established residents.',
      'legal_status' => 'Adult use legal. Delivery services available. Check local dispensary regulations.',
      'key_regulations' => 'No campus consumption. Respect university zones.',
      'neighborhoods' => array(
        'downtown-fullerton', 'csuf-area', 'north-fullerton'
      ),
    ),

    'garden-grove' => array(
      'name' => 'Garden Grove',
      'slug' => 'garden-grove',
      'county' => 'Orange County',
      'seo_path' => 'garden-grove-cannabis-shopping-guide',
      'intro' => 'Central OC city. Growing dispensary presence, competitive pricing.',
      'overview' => 'Garden Grove offers a developing cannabis market with competitive pricing and expanding retail options. Delivery is widely available.',
      'legal_status' => 'Adult use legal. Licensed dispensaries and delivery. Must be 21+.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'garden-grove-center', 'west-garden-grove', 'north-garden-grove'
      ),
    ),

    'newport-beach' => array(
      'name' => 'Newport Beach',
      'slug' => 'newport-beach',
      'county' => 'Orange County',
      'seo_path' => 'newport-beach-cannabis-shopping-guide',
      'intro' => 'Coastal luxury. Delivery-only market, premium products, high prices.',
      'overview' => 'Newport Beach does not permit dispensaries, but delivery services thrive. The market is premium-focused with high-end products and prices to match.',
      'legal_status' => 'Adult use legal. Delivery services only. Must be 21+.',
      'key_regulations' => 'No beach consumption. Respect residential zones.',
      'neighborhoods' => array(
        'balboa-peninsula', 'corona-del-mar', 'fashion-island-area'
      ),
    ),

    'orange' => array(
      'name' => 'Orange',
      'slug' => 'orange',
      'county' => 'Orange County',
      'seo_path' => 'orange-cannabis-shopping-guide',
      'intro' => 'Historic Orange Circle. Limited retail, delivery-focused.',
      'overview' => 'Orange has limited dispensary presence but robust delivery services. The market offers competitive pricing and solid variety.',
      'legal_status' => 'Adult use legal. Delivery services and limited dispensaries. Must be 21+.',
      'key_regulations' => 'No public consumption. Respect historic zones.',
      'neighborhoods' => array(
        'orange-circle', 'chapman-university-area', 'east-orange'
      ),
    ),

    'laguna-beach' => array(
      'name' => 'Laguna Beach',
      'slug' => 'laguna-beach',
      'county' => 'Orange County',
      'seo_path' => 'laguna-beach-cannabis-shopping-guide',
      'intro' => 'Artist colony meets cannabis. Delivery-only, premium products, resort pricing.',
      'overview' => 'Laguna Beach does not permit dispensaries. Delivery services offer premium products at resort-town prices.',
      'legal_status' => 'Adult use legal. Delivery services only. Must be 21+.',
      'key_regulations' => 'No beach consumption. Respect art district zones.',
      'neighborhoods' => array(
        'downtown-laguna', 'laguna-canyon', 'south-laguna'
      ),
    ),

    'mission-viejo' => array(
      'name' => 'Mission Viejo',
      'slug' => 'mission-viejo',
      'county' => 'Orange County',
      'seo_path' => 'mission-viejo-cannabis-shopping-guide',
      'intro' => 'South County master plan. Delivery-focused, family-oriented market.',
      'overview' => 'Mission Viejo has limited dispensary presence. Delivery services dominate, offering competitive pricing and convenience.',
      'legal_status' => 'Adult use legal. Delivery services available. Check local dispensary regulations.',
      'key_regulations' => 'No public consumption. Respect residential zones.',
      'neighborhoods' => array(
        'mission-viejo-center', 'oso-parkway-area', 'lake-mission-viejo'
      ),
    ),

    'lake-forest' => array(
      'name' => 'Lake Forest',
      'slug' => 'lake-forest',
      'county' => 'Orange County',
      'seo_path' => 'lake-forest-cannabis-shopping-guide',
      'intro' => 'South OC city. Delivery-focused market, competitive pricing.',
      'overview' => 'Lake Forest relies primarily on delivery services for cannabis access. The market is competitive with solid variety.',
      'legal_status' => 'Adult use legal. Delivery services available. Check local dispensary regulations.',
      'key_regulations' => 'No public consumption. DUI laws enforced.',
      'neighborhoods' => array(
        'foothill-ranch', 'portola-hills', 'lake-forest-center'
      ),
    ),

    'san-clemente' => array(
      'name' => 'San Clemente',
      'slug' => 'san-clemente',
      'county' => 'Orange County',
      'seo_path' => 'san-clemente-cannabis-shopping-guide',
      'intro' => 'Spanish village by the sea. Delivery-only market, surf town vibes.',
      'overview' => 'San Clemente does not permit dispensaries. Delivery services cater to locals and visitors with a range of products.',
      'legal_status' => 'Adult use legal. Delivery services only. Must be 21+.',
      'key_regulations' => 'No beach consumption. Respect coastal zones.',
      'neighborhoods' => array(
        'downtown-san-clemente', 'san-clemente-pier-area', 'talega'
      ),
    ),

  ), // end cities
);

// ============================================================
// MERGE NEIGHBORHOODS INTO CITIES
// ============================================================
merge_neighborhoods_into_cities($california_state['cities']);

// ============================================================
// RETURN CALIFORNIA STATE ARRAY
// ============================================================
return $california_state;
