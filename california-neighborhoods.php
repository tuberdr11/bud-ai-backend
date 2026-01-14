<?php
/**
 * California Neighborhoods Content
 * ALL neighborhoods for all California cities
 * Merge with california-state-pack.php
 *
 * Structure: city_slug => neighborhood_slug => neighborhood_data
 */
return array(

  // ============================================================
  // LOS ANGELES NEIGHBORHOODS (15)
  // ============================================================
  'los-angeles' => array(
    'downtown-la' => array(
      'overview' => 'DTLA Arts District and surrounding area. High dispensary density. $30-55 eighths.',
      'delivery_explainer' => 'Delivery everywhere. 1-hour options.',
      'product_guides' => array('flower' => '$30-55 eighths.'),
      'recommended_brands' => 'Full LA selection.',
      'price_reality' => '$30-55 eighths after tax.',
      'trend_notes' => 'Arts District. Urban core.',
      'faq' => array(array('q' => 'DTLA options?', 'a' => 'Multiple dispensaries in Arts District.')),
    ),
    'hollywood' => array(
      'overview' => 'Tourist central. Watch for tourist pricing. $30-60 eighths.',
      'delivery_explainer' => 'Delivery may be better value than walk-in.',
      'product_guides' => array('flower' => '$30-60 eighths.'),
      'recommended_brands' => 'Full selection. Celebrity brands.',
      'price_reality' => '$30-60 eighths. Some tourist markup.',
      'trend_notes' => 'Tourist area. Research first.',
      'faq' => array(array('q' => 'Tourist traps?', 'a' => 'Research reviews. Compare prices.')),
    ),
    'west-hollywood' => array(
      'overview' => 'WeHo is LA\'s cannabis-friendliest city. Licensed lounges, premium dispensaries. $35-65 eighths.',
      'delivery_explainer' => 'Delivery plus lounge experiences.',
      'product_guides' => array('flower' => '$35-65 eighths.'),
      'recommended_brands' => 'Premium brands. Cookies flagship.',
      'price_reality' => '$35-65 eighths. Premium market.',
      'trend_notes' => 'LOUNGES available. Original Cannabis Cafe.',
      'faq' => array(array('q' => 'WeHo lounges?', 'a' => 'Licensed consumption lounges exist.')),
    ),
    'venice' => array(
      'overview' => 'Beach culture meets cannabis. Historic cannabis area. $30-55 eighths.',
      'delivery_explainer' => 'Beach delivery popular.',
      'product_guides' => array('flower' => '$30-55 eighths.'),
      'recommended_brands' => 'Full LA selection.',
      'price_reality' => '$30-55 eighths.',
      'trend_notes' => 'Beach culture. No beach consumption.',
      'faq' => array(array('q' => 'Venice Beach?', 'a' => 'Public beach = no consumption.')),
    ),
    'santa-monica' => array(
      'overview' => 'Beach city with LIMITED dispensaries. Delivery recommended. $35-60 eighths.',
      'delivery_explainer' => 'DELIVERY recommended. Limited storefronts.',
      'product_guides' => array('flower' => '$35-60 eighths via delivery.'),
      'recommended_brands' => 'Full selection via delivery.',
      'price_reality' => '$35-60 eighths.',
      'trend_notes' => 'Limited retail. Delivery essential.',
      'faq' => array(array('q' => 'Santa Monica dispensaries?', 'a' => 'Limited. Use delivery.')),
    ),
    'silver-lake' => array(
      'overview' => 'Hip eastside neighborhood. Good options. $30-55 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-55 eighths.'),
      'recommended_brands' => 'Full LA selection. Craft options.',
      'price_reality' => '$30-55 eighths.',
      'trend_notes' => 'Trendy eastside.',
      'faq' => array(array('q' => 'Silver Lake options?', 'a' => 'Multiple dispensaries.')),
    ),
    'north-hollywood' => array(
      'overview' => 'NoHo Arts District. Good selection. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths—good value.'),
      'recommended_brands' => 'Full LA selection.',
      'price_reality' => '$28-50 eighths. Better than Westside.',
      'trend_notes' => 'Arts District. Good value.',
      'faq' => array(array('q' => 'NoHo deals?', 'a' => 'Often good deals.')),
    ),
    'studio-city' => array(
      'overview' => 'Valley neighborhood with options. $30-55 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-55 eighths.'),
      'recommended_brands' => 'Full LA selection.',
      'price_reality' => '$30-55 eighths.',
      'trend_notes' => 'Valley location.',
      'faq' => array(array('q' => 'Studio City options?', 'a' => 'Dispensaries available.')),
    ),
    'sherman-oaks' => array(
      'overview' => 'San Fernando Valley. Good options. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full LA selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Valley hub.',
      'faq' => array(array('q' => 'Sherman Oaks options?', 'a' => 'Multiple dispensaries.')),
    ),
    'woodland-hills' => array(
      'overview' => 'West Valley. Dispensary options. $28-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-52 eighths.'),
      'recommended_brands' => 'Full LA selection.',
      'price_reality' => '$28-52 eighths.',
      'trend_notes' => 'West Valley. Growing market.',
      'faq' => array(array('q' => 'Woodland Hills options?', 'a' => 'Multiple dispensaries.')),
    ),
    'van-nuys' => array(
      'overview' => 'Central Valley with good dispensary concentration. Value pricing. $25-48 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$25-48 eighths—good value.'),
      'recommended_brands' => 'Full LA selection.',
      'price_reality' => '$25-48 eighths. Good Valley value.',
      'trend_notes' => 'Central Valley. Value market.',
      'faq' => array(array('q' => 'Van Nuys deals?', 'a' => 'Often better pricing than Westside.')),
    ),
    'burbank' => array(
      'overview' => 'Media capital. LIMITED dispensaries. Delivery recommended. $32-55 eighths.',
      'delivery_explainer' => 'Delivery recommended.',
      'product_guides' => array('flower' => '$32-55 eighths.'),
      'recommended_brands' => 'Full selection via delivery.',
      'price_reality' => '$32-55 eighths.',
      'trend_notes' => 'Studios nearby. Limited retail.',
      'faq' => array(array('q' => 'Burbank dispensaries?', 'a' => 'Limited. Use delivery.')),
    ),
    'pasadena' => array(
      'overview' => 'BANNED DISPENSARIES. Delivery only. $32-58 eighths.',
      'delivery_explainer' => 'DELIVERY ONLY. No storefronts.',
      'product_guides' => array('flower' => '$32-58 eighths via delivery.'),
      'recommended_brands' => 'Full selection via delivery.',
      'price_reality' => 'Delivery pricing.',
      'trend_notes' => 'NO DISPENSARIES. Rose Bowl city.',
      'faq' => array(array('q' => 'Pasadena dispensaries?', 'a' => 'None. Banned. Must use delivery.')),
    ),
    'long-beach' => array(
      'overview' => 'Port city with established market. Good options. $28-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-52 eighths.'),
      'recommended_brands' => 'Full LA/Long Beach selection.',
      'price_reality' => '$28-52 eighths. Slightly better than LA proper.',
      'trend_notes' => 'Established market. Beach access.',
      'faq' => array(array('q' => 'Long Beach options?', 'a' => 'Multiple licensed dispensaries.')),
    ),
    'inglewood' => array(
      'overview' => 'SoFi Stadium area. Growing market. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Full LA selection.',
      'price_reality' => '$28-50 eighths.',
      'trend_notes' => 'SoFi Stadium. Rams/Chargers.',
      'faq' => array(array('q' => 'SoFi Stadium?', 'a' => 'No cannabis at stadium.')),
    ),
  ),

  // ============================================================
  // SAN FRANCISCO NEIGHBORHOODS (7)
  // ============================================================
  'san-francisco' => array(
    'soma' => array(
      'overview' => 'South of Market. High dispensary concentration. $32-55 eighths.',
      'delivery_explainer' => 'Delivery available. Walk-in plentiful.',
      'product_guides' => array('flower' => '$32-55 eighths.'),
      'recommended_brands' => 'Full SF selection.',
      'price_reality' => '$32-55 eighths.',
      'trend_notes' => 'Tech neighborhood. Good density.',
      'faq' => array(array('q' => 'SoMa options?', 'a' => 'Multiple dispensaries.')),
    ),
    'mission' => array(
      'overview' => 'Cultural neighborhood with multiple dispensaries. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full SF selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Vibrant cultural scene.',
      'faq' => array(array('q' => 'Mission options?', 'a' => 'Well-served neighborhood.')),
    ),
    'castro' => array(
      'overview' => 'Historic LGBTQ+ neighborhood. Cannabis activism roots. $32-55 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$32-55 eighths.'),
      'recommended_brands' => 'Full SF selection.',
      'price_reality' => '$32-55 eighths.',
      'trend_notes' => 'Historic activism area.',
      'faq' => array(array('q' => 'Castro options?', 'a' => 'Multiple dispensaries with historic significance.')),
    ),
    'haight-ashbury' => array(
      'overview' => 'THE historic cannabis neighborhood. Summer of Love. $32-58 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$32-58 eighths.'),
      'recommended_brands' => 'Full SF selection plus historic shops.',
      'price_reality' => '$32-58 eighths. Historic premium.',
      'trend_notes' => 'ICONIC. Summer of Love. Cannabis history.',
      'faq' => array(array('q' => 'Haight-Ashbury significance?', 'a' => 'Birthplace of counterculture.')),
    ),
    'marina' => array(
      'overview' => 'Waterfront neighborhood. $35-58 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$35-58 eighths.'),
      'recommended_brands' => 'Full SF selection.',
      'price_reality' => '$35-58 eighths.',
      'trend_notes' => 'Waterfront. Young professionals.',
      'faq' => array(array('q' => 'Marina options?', 'a' => 'Delivery recommended.')),
    ),
    'sunset' => array(
      'overview' => 'Large residential district. $30-50 eighths.',
      'delivery_explainer' => 'Delivery popular in residential Sunset.',
      'product_guides' => array('flower' => '$30-50 eighths.'),
      'recommended_brands' => 'Full SF selection.',
      'price_reality' => '$30-50 eighths.',
      'trend_notes' => 'Beach access. Residential. Fog.',
      'faq' => array(array('q' => 'Sunset options?', 'a' => 'Delivery popular.')),
    ),
    'downtown-sf' => array(
      'overview' => 'Financial District and Union Square. $32-55 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$32-55 eighths.'),
      'recommended_brands' => 'Full SF selection.',
      'price_reality' => '$32-55 eighths.',
      'trend_notes' => 'Business district. Tourist area.',
      'faq' => array(array('q' => 'Downtown options?', 'a' => 'Several dispensaries. Check SoMa.')),
    ),
  ),

  // ============================================================
  // SAN DIEGO NEIGHBORHOODS (9)
  // ============================================================
  'san-diego' => array(
    'downtown-sd' => array(
      'overview' => 'Downtown San Diego. $32-55 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$32-55 eighths.'),
      'recommended_brands' => 'Full SD selection.',
      'price_reality' => '$32-55 eighths.',
      'trend_notes' => 'Urban core. Gaslamp nearby.',
      'faq' => array(array('q' => 'Downtown options?', 'a' => 'Multiple dispensaries.')),
    ),
    'pacific-beach' => array(
      'overview' => 'PB beach culture. Young crowd. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full SD selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Beach party scene.',
      'faq' => array(array('q' => 'PB beach consumption?', 'a' => 'No consumption on public beach.')),
    ),
    'ocean-beach' => array(
      'overview' => 'OB hippie beach culture. Cannabis-friendly vibe. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Full SD selection.',
      'price_reality' => '$28-50 eighths.',
      'trend_notes' => 'Chill beach vibe. Still no public consumption.',
      'faq' => array(array('q' => 'OB vibe?', 'a' => 'Laid-back. Still no public consumption.')),
    ),
    'la-jolla' => array(
      'overview' => 'Upscale beach community. BANNED DISPENSARIES. Delivery only. $38-65 eighths.',
      'delivery_explainer' => 'DELIVERY ONLY. No retail.',
      'product_guides' => array('flower' => '$38-65 eighths via delivery.'),
      'recommended_brands' => 'Premium via delivery.',
      'price_reality' => 'Premium delivery pricing.',
      'trend_notes' => 'NO DISPENSARIES. Upscale. UCSD nearby.',
      'faq' => array(array('q' => 'La Jolla dispensaries?', 'a' => 'None. Banned. Must use delivery.')),
    ),
    'hillcrest' => array(
      'overview' => 'LGBTQ+ neighborhood. Good dispensary options. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full SD selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Pride neighborhood. Good walkability.',
      'faq' => array(array('q' => 'Hillcrest options?', 'a' => 'Multiple dispensaries.')),
    ),
    'north-park' => array(
      'overview' => 'Hip neighborhood with craft beer and dispensaries. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full SD selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Trendy area. Craft beer.',
      'faq' => array(array('q' => 'North Park options?', 'a' => 'Good dispensary coverage.')),
    ),
    'mission-valley' => array(
      'overview' => 'Shopping and stadium area. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Full SD selection.',
      'price_reality' => '$28-50 eighths.',
      'trend_notes' => 'Shopping centers. Snapdragon Stadium.',
      'faq' => array(array('q' => 'Mission Valley options?', 'a' => 'Dispensaries in area.')),
    ),
    'chula-vista' => array(
      'overview' => 'South Bay near border. Growing market. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Full SD selection.',
      'price_reality' => '$28-50 eighths.',
      'trend_notes' => 'Near border. DO NOT cross with cannabis.',
      'faq' => array(array('q' => 'Border proximity?', 'a' => 'DO NOT attempt to cross with cannabis.')),
    ),
    'oceanside' => array(
      'overview' => 'North County coastal. Camp Pendleton adjacent. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Standard SD selection.',
      'price_reality' => '$28-50 eighths.',
      'trend_notes' => 'CAMP PENDLETON nearby—no cannabis on base.',
      'faq' => array(array('q' => 'Camp Pendleton?', 'a' => 'Federal military base. No cannabis.')),
    ),
  ),

  // ============================================================
  // OAKLAND NEIGHBORHOODS (4)
  // ============================================================
  'oakland' => array(
    'downtown-oakland' => array(
      'overview' => 'Downtown Oakland. Good dispensary concentration. $28-50 eighths.',
      'delivery_explainer' => 'Delivery and walk-in available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Full Oakland selection.',
      'price_reality' => '$28-50 eighths. Good value.',
      'trend_notes' => 'Urban core. BART accessible.',
      'faq' => array(array('q' => 'Downtown options?', 'a' => 'Multiple dispensaries near BART.')),
    ),
    'temescal' => array(
      'overview' => 'Trendy neighborhood with excellent options. $28-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-52 eighths.'),
      'recommended_brands' => 'Full Oakland selection.',
      'price_reality' => '$28-52 eighths.',
      'trend_notes' => 'Trendy. Telegraph Ave.',
      'faq' => array(array('q' => 'Temescal options?', 'a' => 'Quality dispensaries.')),
    ),
    'lake-merritt' => array(
      'overview' => 'Lake area with good options. $28-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-52 eighths.'),
      'recommended_brands' => 'Full Oakland selection.',
      'price_reality' => '$28-52 eighths.',
      'trend_notes' => 'Lake views. BART accessible.',
      'faq' => array(array('q' => 'Lake Merritt options?', 'a' => 'Good dispensary coverage.')),
    ),
    'fruitvale' => array(
      'overview' => 'Historic neighborhood. Equity dispensaries. $26-48 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$26-48 eighths.'),
      'recommended_brands' => 'Equity brands supported.',
      'price_reality' => '$26-48 eighths. Good value.',
      'trend_notes' => 'Historic Latino neighborhood. Equity focus.',
      'faq' => array(array('q' => 'Fruitvale options?', 'a' => 'Equity-owned dispensaries.')),
    ),
  ),

  // ============================================================
  // SAN JOSE NEIGHBORHOODS (6)
  // ============================================================
  'san-jose' => array(
    'downtown-sj' => array(
      'overview' => 'Downtown San Jose. SAP Center. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full SJ selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Urban core. Sharks.',
      'faq' => array(array('q' => 'Downtown options?', 'a' => 'Multiple dispensaries.')),
    ),
    'willow-glen' => array(
      'overview' => 'Charming neighborhood. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full SJ selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Village atmosphere.',
      'faq' => array(array('q' => 'Willow Glen options?', 'a' => 'Delivery or nearby dispensaries.')),
    ),
    'campbell' => array(
      'overview' => 'Downtown Campbell area. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Downtown Campbell. Pruneyard.',
      'faq' => array(array('q' => 'Campbell options?', 'a' => 'Dispensaries available.')),
    ),
    'palo-alto' => array(
      'overview' => 'Stanford area. BANNED DISPENSARIES. Delivery only. $35-60 eighths.',
      'delivery_explainer' => 'DELIVERY ONLY. No retail.',
      'product_guides' => array('flower' => '$35-60 eighths via delivery.'),
      'recommended_brands' => 'Premium via delivery.',
      'price_reality' => 'Premium delivery.',
      'trend_notes' => 'NO DISPENSARIES. Stanford.',
      'faq' => array(array('q' => 'Palo Alto dispensaries?', 'a' => 'None. Banned. Must use delivery.')),
    ),
    'sunnyvale' => array(
      'overview' => 'Tech hub. Some options. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Tech companies. Some retail.',
      'faq' => array(array('q' => 'Sunnyvale options?', 'a' => 'Some dispensaries available.')),
    ),
    'santa-clara' => array(
      'overview' => 'Levis Stadium city. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => '49ers. Great America.',
      'faq' => array(array('q' => 'Levis Stadium?', 'a' => 'No cannabis at stadium.')),
    ),
  ),

  // ============================================================
  // SACRAMENTO NEIGHBORHOODS (5)
  // ============================================================
  'sacramento' => array(
    'downtown-sac' => array(
      'overview' => 'Downtown Sacramento near Capitol. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Full Sac selection.',
      'price_reality' => '$28-50 eighths.',
      'trend_notes' => 'Capitol area. Golden 1 Center.',
      'faq' => array(array('q' => 'Downtown options?', 'a' => 'Multiple dispensaries.')),
    ),
    'midtown-sac' => array(
      'overview' => 'Walkable grid with dining and nightlife. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Full Sac selection.',
      'price_reality' => '$28-50 eighths.',
      'trend_notes' => 'Best walkability. Farm-to-fork dining.',
      'faq' => array(array('q' => 'Midtown options?', 'a' => 'Good dispensary coverage.')),
    ),
    'elk-grove' => array(
      'overview' => 'South Sac suburb. Good options. $26-48 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$26-48 eighths.'),
      'recommended_brands' => 'Full Sac selection.',
      'price_reality' => '$26-48 eighths.',
      'trend_notes' => 'Large suburb. Growing.',
      'faq' => array(array('q' => 'Elk Grove options?', 'a' => 'Multiple dispensaries.')),
    ),
    'roseville' => array(
      'overview' => 'Placer County suburb. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Full Sac selection.',
      'price_reality' => '$28-50 eighths.',
      'trend_notes' => 'Growing suburb. Galleria area.',
      'faq' => array(array('q' => 'Roseville options?', 'a' => 'Dispensaries available.')),
    ),
    'folsom' => array(
      'overview' => 'East suburb near Folsom Lake. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Full Sac selection.',
      'price_reality' => '$28-50 eighths.',
      'trend_notes' => 'Lake recreation.',
      'faq' => array(array('q' => 'Folsom options?', 'a' => 'Check dispensaries and delivery.')),
    ),
  ),

  // ============================================================
  // PALM SPRINGS NEIGHBORHOODS (5)
  // ============================================================
  'palm-springs' => array(
    'downtown-palm-springs' => array(
      'overview' => 'Downtown Palm Springs resort core. LOUNGES. $32-58 eighths.',
      'delivery_explainer' => 'Delivery, walk-in, and lounges.',
      'product_guides' => array('flower' => '$32-58 eighths.'),
      'recommended_brands' => 'Full CA premium selection.',
      'price_reality' => '$32-58 eighths. Resort market.',
      'trend_notes' => 'LOUNGES! Premium retail.',
      'faq' => array(array('q' => 'Palm Springs lounges?', 'a' => 'Licensed consumption lounges.')),
    ),
    'cathedral-city' => array(
      'overview' => 'Adjacent city with good options. $28-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-52 eighths.'),
      'recommended_brands' => 'Full CA selection.',
      'price_reality' => '$28-52 eighths. Better than PS proper.',
      'trend_notes' => 'More dispensaries, slightly lower prices.',
      'faq' => array(array('q' => 'Cathedral City options?', 'a' => 'Multiple dispensaries.')),
    ),
    'desert-hot-springs' => array(
      'overview' => 'Cannabis cultivation hub. Good selection. $26-48 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$26-48 eighths.'),
      'recommended_brands' => 'Local cultivators + major brands.',
      'price_reality' => '$26-48 eighths. Value options.',
      'trend_notes' => 'Cultivation center. Good value.',
      'faq' => array(array('q' => 'Desert Hot Springs?', 'a' => 'Cannabis cultivation hub.')),
    ),
    'palm-desert' => array(
      'overview' => 'Upscale desert city. $30-55 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-55 eighths.'),
      'recommended_brands' => 'Full CA selection.',
      'price_reality' => '$30-55 eighths.',
      'trend_notes' => 'El Paseo shopping. Upscale.',
      'faq' => array(array('q' => 'Palm Desert options?', 'a' => 'Dispensaries available.')),
    ),
    'indio' => array(
      'overview' => 'Coachella/Stagecoach home. $28-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-50 eighths.'),
      'recommended_brands' => 'Full CA selection.',
      'price_reality' => '$28-50 eighths. Festival season may vary.',
      'trend_notes' => 'Festival city. Coachella. Stagecoach.',
      'faq' => array(array('q' => 'Coachella festival?', 'a' => 'Festival has own rules. Shop in Indio before.')),
    ),
  ),

  // ============================================================
  // HUMBOLDT NEIGHBORHOODS (3)
  // ============================================================
  'humboldt' => array(
    'eureka' => array(
      'overview' => 'Humboldt\'s largest city. Good dispensary selection. $28-48 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-48 eighths. Heritage quality.'),
      'recommended_brands' => 'Humboldt heritage farms.',
      'price_reality' => '$28-48 eighths. Great value.',
      'trend_notes' => 'Victorian downtown. Waterfront.',
      'faq' => array(array('q' => 'Eureka options?', 'a' => 'Multiple dispensaries with heritage products.')),
    ),
    'arcata' => array(
      'overview' => 'HSU college town. Strong cannabis culture. $26-46 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$26-46 eighths.'),
      'recommended_brands' => 'Humboldt heritage farms.',
      'price_reality' => '$26-46 eighths. College town value.',
      'trend_notes' => 'Cal Poly Humboldt. Plaza culture.',
      'faq' => array(array('q' => 'Arcata options?', 'a' => 'Good dispensary coverage.')),
    ),
    'garberville' => array(
      'overview' => 'Southern Humboldt gateway. Heart of cultivation country. $25-45 eighths.',
      'delivery_explainer' => 'Limited delivery. Rural.',
      'product_guides' => array('flower' => '$25-45 eighths. Source region.'),
      'recommended_brands' => 'Local heritage farms.',
      'price_reality' => '$25-45 eighths. Direct from source.',
      'trend_notes' => 'EMERALD TRIANGLE HEART. Cultivation country.',
      'faq' => array(array('q' => 'Garberville?', 'a' => 'Small town in cultivation heartland.')),
    ),
  ),

  // ============================================================
  // FRESNO NEIGHBORHOODS (3)
  // ============================================================
  'fresno' => array(
    'downtown-fresno' => array(
      'overview' => 'Downtown Fresno. $26-48 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$26-48 eighths.'),
      'recommended_brands' => 'Major CA brands.',
      'price_reality' => '$26-48 eighths.',
      'trend_notes' => 'City center.',
      'faq' => array(array('q' => 'Downtown options?', 'a' => 'Dispensaries available.')),
    ),
    'tower-district' => array(
      'overview' => 'Entertainment and arts district. $26-50 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$26-50 eighths.'),
      'recommended_brands' => 'Major CA brands.',
      'price_reality' => '$26-50 eighths.',
      'trend_notes' => 'Arts and nightlife area.',
      'faq' => array(array('q' => 'Tower District options?', 'a' => 'Check nearby dispensaries.')),
    ),
    'north-fresno' => array(
      'overview' => 'North Fresno residential. $26-48 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$26-48 eighths.'),
      'recommended_brands' => 'Major CA brands.',
      'price_reality' => '$26-48 eighths.',
      'trend_notes' => 'Residential areas.',
      'faq' => array(array('q' => 'North Fresno?', 'a' => 'Check dispensary locations.')),
    ),
  ),

  // ============================================================
  // SANTA BARBARA NEIGHBORHOODS (3)
  // ============================================================
  'santa-barbara' => array(
    'downtown-sb' => array(
      'overview' => 'Downtown Santa Barbara. $32-58 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$32-58 eighths.'),
      'recommended_brands' => 'Full CA premium selection.',
      'price_reality' => '$32-58 eighths. Upscale.',
      'trend_notes' => 'Downtown walkable. Premium market.',
      'faq' => array(array('q' => 'Downtown options?', 'a' => 'Dispensaries in downtown area.')),
    ),
    'goleta' => array(
      'overview' => 'Adjacent city. UCSB area. $28-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$28-52 eighths.'),
      'recommended_brands' => 'Full CA selection.',
      'price_reality' => '$28-52 eighths.',
      'trend_notes' => 'UCSB adjacent. Slightly better value.',
      'faq' => array(array('q' => 'Goleta options?', 'a' => 'Dispensaries available.')),
    ),
    'isla-vista' => array(
      'overview' => 'UCSB college town. Delivery recommended. $28-52 eighths.',
      'delivery_explainer' => 'Delivery popular with students.',
      'product_guides' => array('flower' => '$28-52 eighths.'),
      'recommended_brands' => 'Full CA selection.',
      'price_reality' => '$28-52 eighths.',
      'trend_notes' => 'Student area. No campus consumption.',
      'faq' => array(array('q' => 'IV options?', 'a' => 'Delivery popular. Students 21+ only.')),
    ),
  ),

  // ============================================================
  // SANTA CRUZ NEIGHBORHOODS (2)
  // ============================================================
  'santa-cruz' => array(
    'downtown-sc' => array(
      'overview' => 'Downtown Santa Cruz. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full SC selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Downtown core. Pacific Ave.',
      'faq' => array(array('q' => 'Downtown options?', 'a' => 'Multiple dispensaries.')),
    ),
    'capitola' => array(
      'overview' => 'Beach village. $30-52 eighths.',
      'delivery_explainer' => 'Delivery available.',
      'product_guides' => array('flower' => '$30-52 eighths.'),
      'recommended_brands' => 'Full SC selection.',
      'price_reality' => '$30-52 eighths.',
      'trend_notes' => 'Charming beach village.',
      'faq' => array(array('q' => 'Capitola options?', 'a' => 'Check dispensaries in area.')),
    ),
  ),

);
