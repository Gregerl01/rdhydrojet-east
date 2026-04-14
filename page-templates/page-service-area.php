<?php
/**
 * Template Name: Service Area Page
 *
 * Shared template for 12 service area city pages. Content keyed
 * by $post->post_name (page slug).
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(619) 571-1777' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );
$email         = get_theme_mod( 'bmg_email', 'info@rdhydrojeteast.com' );

// =========================================================================
// City content — keyed by page slug
// =========================================================================
$cities = array(

	'plumber-in-el-cajon' => array(
		'name'        => 'El Cajon',
		'h1'          => 'Plumber in El Cajon — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Fast, reliable plumbing for East County\'s largest city. Same-day service for El Cajon homes and businesses.',
		'intro'       => '<p>El Cajon sits in a valley surrounded by hills, with a housing stock that spans from 1950s tract homes to newer developments off Fletcher Parkway and Jamacha Road. Many older homes near downtown and along Main Street still run on original cast iron and clay sewer lines that are prone to root intrusion and corrosion.</p><p>Hard water is a persistent issue across the city, causing sediment buildup in water heaters and scale in supply lines. We handle everything from hydro jetting root-invaded sewer mains to tankless water heater upgrades in newer homes off Fury Lane and Greenfield Drive.</p>',
		'map_query'   => 'El Cajon, CA',
		'testimonial' => array(
			'quote'    => 'Called at 11pm with a sewer backup and they had someone at our house in under an hour. Found the root intrusion with the camera and cleared it the same night.',
			'name'     => 'Michael Torres',
			'location' => 'El Cajon',
			'service'  => '24/7 Emergency',
		),
		'faqs'        => array(
			array(
				'q' => 'Do you replace cast iron pipes in older El Cajon homes?',
				'a' => 'Yes. Many El Cajon homes built before 1980 have original cast iron sewer lines. We camera-inspect the line, assess condition, and can replace with modern ABS or PVC — often with trenchless methods that minimize yard damage.',
			),
			array(
				'q' => 'How do you handle El Cajon\'s hard water issues?',
				'a' => 'Hard water causes scale buildup in pipes and water heaters, reducing efficiency and lifespan. We install water softeners, descale tankless heaters, and replace corroded supply lines caused by mineral deposits.',
			),
			array(
				'q' => 'What causes sewer line problems in the El Cajon valley?',
				'a' => 'The valley\'s clay soil shifts seasonally, stressing older clay and cast iron pipes. Tree roots seek moisture in cracked joints. We use camera inspection to find the exact problem and hydro jetting or pipe replacement to fix it.',
			),
			array(
				'q' => 'How fast can you respond to an emergency in El Cajon?',
				'a' => 'We\'re typically on-site within 60 minutes for El Cajon emergencies. As East County\'s largest city, El Cajon is central to our service area and we have technicians nearby at all times.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-la-mesa', 'name' => 'La Mesa' ),
			array( 'slug' => 'plumber-in-santee', 'name' => 'Santee' ),
			array( 'slug' => 'plumber-in-lakeside', 'name' => 'Lakeside' ),
			array( 'slug' => 'plumber-in-rancho-san-diego', 'name' => 'Rancho San Diego' ),
		),
	),

	'plumber-in-la-mesa' => array(
		'name'        => 'La Mesa',
		'h1'          => 'Plumber in La Mesa — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Trusted plumbing service for the Jewel of the Hills. From the Village to Mt. Helix, we know La Mesa pipes.',
		'intro'       => '<p>La Mesa is a mix of charming 1940s–60s homes near the Village and newer construction in the eastern neighborhoods around Mt. Helix and Lake Murray. The older homes near Spring Street and University Avenue often need complete repiping — original galvanized pipes cause low water pressure and rust-colored water.</p><p>Hillside homes around Mt. Helix present unique drainage challenges with longer sewer runs and steeper grades that make hydro jetting essential for preventive maintenance. We serve La Mesa daily and understand the specific plumbing profiles of each neighborhood.</p>',
		'map_query'   => 'La Mesa, CA',
		'testimonial' => array(
			'quote'    => 'We\'d had three plumbers out in two years for the same recurring clog. RD ran the camera, found grease buildup the others missed, and hydro-jetted the line. No issues since.',
			'name'     => 'Karen Walsh',
			'location' => 'La Mesa',
			'service'  => 'Hydro Jetting',
		),
		'faqs'        => array(
			array(
				'q' => 'Should I repipe my older La Mesa home?',
				'a' => 'If your home was built before 1970 and has galvanized pipes, repiping is likely overdue. Signs include rust-colored water, low pressure, and pinhole leaks. We assess the full system and give you options — copper or PEX.',
			),
			array(
				'q' => 'Why do Mt. Helix homes have more drainage issues?',
				'a' => 'Steeper grades mean longer sewer laterals with more elevation changes. Debris accumulates at low points and grade transitions. Regular hydro jetting — every 18-24 months — prevents backups in hillside sewer lines.',
			),
			array(
				'q' => 'Do you handle slab leaks in La Mesa mid-century homes?',
				'a' => 'Yes. Slab leaks are common in 1950s-60s homes with copper supply lines embedded in the foundation. We use electronic detection to pinpoint the leak without breaking concrete unnecessarily.',
			),
			array(
				'q' => 'How quickly can you get to La Mesa for an emergency?',
				'a' => 'La Mesa is in our core service area. For emergencies like burst pipes or sewer backups, we typically arrive within 45-60 minutes, day or night.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-el-cajon', 'name' => 'El Cajon' ),
			array( 'slug' => 'plumber-in-lemon-grove', 'name' => 'Lemon Grove' ),
			array( 'slug' => 'plumber-in-college-area', 'name' => 'College Area' ),
			array( 'slug' => 'plumber-in-del-cerro', 'name' => 'Del Cerro' ),
		),
	),

	'plumber-in-santee' => array(
		'name'        => 'Santee',
		'h1'          => 'Plumber in Santee — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Serving Santee families with honest plumbing since 2003. From Riverview to Carlton Hills, we\'ve got you covered.',
		'intro'       => '<p>Santee has grown significantly over the past two decades, with a mix of established neighborhoods like Carlton Hills and Prospect Park alongside newer developments near Fanita Ranch. The older homes along Mast Boulevard and Carlton Oaks frequently deal with sewer line issues from aging clay pipes and mature tree root intrusion.</p><p>Newer builds tend to have more water heater and fixture-related calls. Santee\'s proximity to the San Diego River also means some properties face drainage and groundwater challenges that require experienced plumbing diagnostics.</p>',
		'map_query'   => 'Santee, CA',
		'testimonial' => array(
			'quote'    => 'Honest pricing, clean work, and they took the time to show me the camera footage before and after. First plumber I\'ve used who treated me like I could understand the problem.',
			'name'     => 'David Nguyen',
			'location' => 'Santee',
			'service'  => 'Drain & Sewer Repair',
		),
		'faqs'        => array(
			array(
				'q' => 'Do you handle tree root intrusion in Santee sewer lines?',
				'a' => 'Yes. Santee\'s mature trees — especially along Mast Boulevard and in Carlton Hills — frequently invade clay sewer pipes through cracked joints. We clear roots with hydro jetting and can reline or replace damaged sections.',
			),
			array(
				'q' => 'What water heater services do you offer in Santee?',
				'a' => 'We install, repair, and replace both tank and tankless water heaters. For Santee\'s newer homes, we often recommend tankless upgrades for better efficiency and endless hot water.',
			),
			array(
				'q' => 'Are there drainage issues near the San Diego River in Santee?',
				'a' => 'Properties near the river can experience higher groundwater and drainage complications. We diagnose these with camera inspections and provide proper grading and drainage solutions.',
			),
			array(
				'q' => 'How soon can an emergency plumber reach Santee?',
				'a' => 'Santee is central to our East County coverage. Emergency response is typically within 45-60 minutes for burst pipes, backups, and other urgent plumbing issues.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-el-cajon', 'name' => 'El Cajon' ),
			array( 'slug' => 'plumber-in-lakeside', 'name' => 'Lakeside' ),
			array( 'slug' => 'plumber-in-del-cerro', 'name' => 'Del Cerro' ),
			array( 'slug' => 'plumber-in-san-carlos', 'name' => 'San Carlos' ),
		),
	),

	'plumber-in-lakeside' => array(
		'name'        => 'Lakeside',
		'h1'          => 'Plumber in Lakeside — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Rural and suburban plumbing specialists. Septic systems, well water, and full-service plumbing for Lakeside properties.',
		'intro'       => '<p>Lakeside is one of East County\'s more rural communities, and many properties here rely on septic systems and well water rather than municipal services. Our C42 Sanitation license makes us one of the few plumbing companies in the area qualified to inspect, repair, and install septic systems.</p><p>Properties along Wildcat Canyon Road, Riverford Road, and Mapleview Street often have longer sewer runs and older infrastructure that benefits from regular hydro jetting. We also handle well pump issues, pressure tank problems, and water treatment system installation for Lakeside homes dealing with hard or mineral-heavy well water.</p>',
		'map_query'   => 'Lakeside, CA',
		'testimonial' => array(
			'quote'    => 'Tankless water heater install took one day and the quote was exactly what they charged. Professional crew, respected the house, cleaned everything up. Highly recommend.',
			'name'     => 'Sandra Ortiz',
			'location' => 'Lakeside',
			'service'  => 'Water Heater',
		),
		'faqs'        => array(
			array(
				'q' => 'Do you service septic systems in Lakeside?',
				'a' => 'Yes. We hold a C42 Sanitation license — one of the few plumbing companies in East County with this certification. We inspect, repair, pump, and replace septic systems for Lakeside residential and commercial properties.',
			),
			array(
				'q' => 'Can you help with well water plumbing issues?',
				'a' => 'Absolutely. We handle well pump repair, pressure tank replacement, and water treatment system installation for Lakeside homes with well water. Hard and mineral-heavy well water requires specialized filtration.',
			),
			array(
				'q' => 'How do you maintain longer sewer lines on Lakeside properties?',
				'a' => 'Larger Lakeside lots often have 100+ foot sewer runs. We use hydro jetting to clear the full length and camera inspection to identify problem areas before they cause backups.',
			),
			array(
				'q' => 'What\'s your response time to Lakeside?',
				'a' => 'Lakeside is part of our regular service area. Standard appointments are same-day when available, and emergency calls are typically answered within 60-90 minutes.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-santee', 'name' => 'Santee' ),
			array( 'slug' => 'plumber-in-el-cajon', 'name' => 'El Cajon' ),
			array( 'slug' => 'plumber-in-alpine', 'name' => 'Alpine' ),
			array( 'slug' => 'plumber-in-ramona', 'name' => 'Ramona' ),
		),
	),

	'plumber-in-spring-valley' => array(
		'name'        => 'Spring Valley',
		'h1'          => 'Plumber in Spring Valley — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Dependable plumbing for Spring Valley homes. Fast response across Sweetwater and Bancroft neighborhoods.',
		'intro'       => '<p>Spring Valley is an unincorporated community with a dense mix of single-family homes, apartments, and small commercial properties. Much of the housing stock dates from the 1960s–70s, which means cast iron drain lines, galvanized supply pipes, and water heaters that are often past their useful life.</p><p>The hilly terrain around Sweetwater Road and Bancroft Drive creates drainage challenges that standard plumbing approaches don\'t always solve. We bring camera inspections and hydro jetting to diagnose and clear problems that other plumbers miss.</p>',
		'map_query'   => 'Spring Valley, CA',
		'testimonial' => array(
			'quote'    => 'I manage several rental properties in Spring Valley. RD is the only plumber I call now. Fast, reliable, and they document everything so I can share with owners. Game changer.',
			'name'     => 'Jon Rafferty',
			'location' => 'Spring Valley',
			'service'  => 'Commercial Service',
		),
		'faqs'        => array(
			array(
				'q' => 'Do you handle plumbing for apartment buildings in Spring Valley?',
				'a' => 'Yes. We serve landlords and property managers across Spring Valley. We handle multi-unit drain cleaning, water heater replacements, and emergency repairs with minimal tenant disruption.',
			),
			array(
				'q' => 'When should I replace aging pipes in my Spring Valley home?',
				'a' => 'If your home was built in the 1960s-70s and still has original cast iron drains or galvanized supply lines, replacement is likely needed soon. Warning signs include frequent clogs, low pressure, and discolored water.',
			),
			array(
				'q' => 'What causes drainage problems on Spring Valley\'s hilly terrain?',
				'a' => 'Hilly lots create steeper sewer grades and longer runs. Debris settles at grade changes, and older clay pipes crack under soil movement. Camera inspection identifies the exact issue before we recommend a fix.',
			),
			array(
				'q' => 'How fast can you respond to Spring Valley?',
				'a' => 'Spring Valley is in our core East County service area. Emergency response is typically within 45-60 minutes. We offer same-day scheduling for non-emergency calls.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-la-mesa', 'name' => 'La Mesa' ),
			array( 'slug' => 'plumber-in-lemon-grove', 'name' => 'Lemon Grove' ),
			array( 'slug' => 'plumber-in-el-cajon', 'name' => 'El Cajon' ),
			array( 'slug' => 'plumber-in-rancho-san-diego', 'name' => 'Rancho San Diego' ),
		),
	),

	'plumber-in-lemon-grove' => array(
		'name'        => 'Lemon Grove',
		'h1'          => 'Plumber in Lemon Grove — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Small city, big plumbing needs. Licensed service for Lemon Grove\'s homes and businesses.',
		'intro'       => '<p>Lemon Grove is a compact, walkable city with a housing stock that\'s predominantly mid-century — 1950s through 1970s construction along Broadway, Massachusetts Avenue, and Pacific Avenue. These homes frequently have original cast iron sewer lines and galvanized water supply pipes that cause recurring clogs, low pressure, and discolored water.</p><p>The city\'s older commercial corridor also sees regular drain and grease-line issues. We provide targeted plumbing services for Lemon Grove\'s specific infrastructure challenges, including full repiping, hydro jetting, and water heater upgrades.</p>',
		'map_query'   => 'Lemon Grove, CA',
		'testimonial' => array(
			'quote'    => 'Slab leak under the kitchen. They used electronic detection to pinpoint it exactly and re-routed without tearing up the whole floor. Saved us thousands.',
			'name'     => 'Rachel Kim',
			'location' => 'Lemon Grove',
			'service'  => 'Leak Detection',
		),
		'faqs'        => array(
			array(
				'q' => 'Do you replace galvanized pipes in Lemon Grove homes?',
				'a' => 'Yes. Galvanized pipe replacement is one of our most common services in Lemon Grove. We repipe with copper or PEX, restoring full water pressure and eliminating rust discoloration.',
			),
			array(
				'q' => 'Can you handle commercial drain cleaning on Broadway?',
				'a' => 'Absolutely. We serve Lemon Grove\'s commercial corridor with hydro jetting for grease lines, drain maintenance for restaurants, and emergency service for retail and office properties.',
			),
			array(
				'q' => 'Why is my water brown in my Lemon Grove home?',
				'a' => 'Brown or rust-colored water usually means corroding galvanized pipes. The interior zinc coating breaks down after 40-60 years, releasing rust particles. A full repipe is the permanent fix.',
			),
			array(
				'q' => 'What\'s the cost of repiping a Lemon Grove home?',
				'a' => 'Cost depends on home size, number of fixtures, and pipe material chosen (copper vs. PEX). We provide free estimates with a detailed written quote before any work begins.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-la-mesa', 'name' => 'La Mesa' ),
			array( 'slug' => 'plumber-in-spring-valley', 'name' => 'Spring Valley' ),
			array( 'slug' => 'plumber-in-college-area', 'name' => 'College Area' ),
			array( 'slug' => 'plumber-in-el-cajon', 'name' => 'El Cajon' ),
		),
	),

	'plumber-in-rancho-san-diego' => array(
		'name'        => 'Rancho San Diego',
		'h1'          => 'Plumber in Rancho San Diego — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Professional plumbing for Rancho San Diego\'s newer homes and established neighborhoods.',
		'intro'       => '<p>Rancho San Diego is a master-planned community with homes built primarily from the 1980s through 2000s. While the infrastructure is newer than much of East County, these homes are now reaching the age where slab leaks, water heater failures, and supply line issues become common.</p><p>The area around Jamacha Boulevard, Avocado Boulevard, and Campo Road sees regular calls for leak detection, water heater replacement, and drain cleaning. We also serve the commercial properties along Cuyamaca Street with hydro jetting and grease line maintenance.</p>',
		'map_query'   => 'Rancho San Diego, CA',
		'testimonial' => array(
			'quote'    => 'Slab leak under the kitchen. They used electronic detection to pinpoint it exactly and re-routed without tearing up the whole floor. Saved us thousands compared to the first estimate we got.',
			'name'     => 'Rachel Kim',
			'location' => 'Rancho San Diego',
			'service'  => 'Leak Detection',
		),
		'faqs'        => array(
			array(
				'q' => 'Are slab leaks common in Rancho San Diego homes?',
				'a' => 'Yes. Homes built in the 80s-90s often used copper supply lines under the slab that develop pinhole leaks after 30-40 years. We use electronic and thermal detection to locate leaks precisely.',
			),
			array(
				'q' => 'When should I replace my water heater in Rancho San Diego?',
				'a' => 'Tank water heaters typically last 10-15 years. If yours was original to the home and built in the 80s-90s, it\'s likely been replaced once but may be due again. We assess condition and recommend repair vs. replacement.',
			),
			array(
				'q' => 'Do you serve commercial properties in Rancho San Diego?',
				'a' => 'Yes. We handle commercial plumbing along Cuyamaca Street and Jamacha Boulevard — hydro jetting, grease trap maintenance, and emergency service for restaurants, retail, and office buildings.',
			),
			array(
				'q' => 'Is it time to repipe my 1980s-90s Rancho San Diego home?',
				'a' => 'If you\'re seeing low pressure, pinhole leaks, or discolored water, your copper or polybutylene pipes may need replacement. We inspect and give you an honest assessment — not every home needs a full repipe.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-el-cajon', 'name' => 'El Cajon' ),
			array( 'slug' => 'plumber-in-spring-valley', 'name' => 'Spring Valley' ),
			array( 'slug' => 'plumber-in-la-mesa', 'name' => 'La Mesa' ),
			array( 'slug' => 'plumber-in-alpine', 'name' => 'Alpine' ),
		),
	),

	'plumber-in-alpine' => array(
		'name'        => 'Alpine',
		'h1'          => 'Plumber in Alpine — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Mountain community plumbing experts. Septic, well water, and full-service plumbing for Alpine properties.',
		'intro'       => '<p>Alpine sits at a higher elevation than the rest of East County, and its properties tend to be larger, more spread out, and often rely on septic systems and well water. Our C42 Sanitation license is critical here — we inspect, repair, and replace septic systems for residential and small commercial properties throughout the Alpine area.</p><p>Longer pipe runs on larger lots mean more opportunity for root intrusion and sediment buildup, making regular hydro jetting a smart preventive measure. We also handle freeze protection for exposed pipes during Alpine\'s colder winter nights, a concern that lower-elevation plumbers often overlook.</p>',
		'map_query'   => 'Alpine, CA',
		'testimonial' => array(
			'quote'    => 'Tankless water heater install took one day and the quote was exactly what they charged. Professional crew, respected the house, cleaned everything up.',
			'name'     => 'Sandra Ortiz',
			'location' => 'Alpine',
			'service'  => 'Water Heater',
		),
		'faqs'        => array(
			array(
				'q' => 'Do you service septic systems in Alpine?',
				'a' => 'Yes. We\'re C42 Sanitation licensed — one of the few plumbing contractors in East County qualified for septic work. We handle inspections, diagnostics, repairs, and full system replacements for Alpine properties.',
			),
			array(
				'q' => 'Can you protect my Alpine pipes from freezing?',
				'a' => 'Absolutely. Alpine\'s higher elevation means colder winter nights. We insulate exposed pipes, install heat tape where needed, and can reroute vulnerable pipe runs to prevent freeze damage.',
			),
			array(
				'q' => 'How do you handle well water plumbing in Alpine?',
				'a' => 'We install and service well pumps, pressure tanks, and water treatment systems. Alpine\'s well water often has high mineral content that requires proper filtration to protect your plumbing and appliances.',
			),
			array(
				'q' => 'What\'s your response time to Alpine?',
				'a' => 'Alpine is at the edge of our primary service area. Standard appointments are same-day when available. Emergency response is typically within 60-90 minutes depending on time of day.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-lakeside', 'name' => 'Lakeside' ),
			array( 'slug' => 'plumber-in-el-cajon', 'name' => 'El Cajon' ),
			array( 'slug' => 'plumber-in-rancho-san-diego', 'name' => 'Rancho San Diego' ),
			array( 'slug' => 'plumber-in-pine-valley', 'name' => 'Pine Valley' ),
		),
	),

	'plumber-in-san-carlos' => array(
		'name'        => 'San Carlos',
		'h1'          => 'Plumber in San Carlos — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Reliable plumbing for San Carlos homes. Lake Murray to Cowles Mountain, we serve the whole neighborhood.',
		'intro'       => '<p>San Carlos is a well-established residential community where most homes were built in the 1960s–70s. The neighborhood\'s mature trees — particularly along Navajo Road, Lake Murray Boulevard, and Golfcrest Drive — create persistent root intrusion problems in sewer lines.</p><p>Original cast iron and clay pipes are still common throughout the neighborhood, and many homeowners are just now discovering they need full sewer line replacement or repiping. We\'re in San Carlos regularly, handling everything from emergency drain backups to planned water heater upgrades and whole-home repipes.</p>',
		'map_query'   => 'San Carlos, San Diego, CA',
		'testimonial' => array(
			'quote'    => 'Honest pricing, clean work, and they took the time to show me the camera footage before and after. First plumber I\'ve used who treated me like I could understand the problem.',
			'name'     => 'David Nguyen',
			'location' => 'San Carlos',
			'service'  => 'Drain & Sewer Repair',
		),
		'faqs'        => array(
			array(
				'q' => 'Why do San Carlos homes have so many root intrusion problems?',
				'a' => 'San Carlos has some of the most mature landscaping in East County. Large tree roots seek moisture through cracked joints in clay and cast iron sewer pipes. Hydro jetting clears the roots, and pipe relining prevents regrowth.',
			),
			array(
				'q' => 'Should I replace my cast iron pipes in San Carlos?',
				'a' => 'If your home has original cast iron drain lines from the 1960s-70s, they\'re likely corroding from the inside. Camera inspection reveals the true condition. Many San Carlos homeowners are replacing now before a complete failure.',
			),
			array(
				'q' => 'Do you offer sewer camera inspections in San Carlos?',
				'a' => 'Yes. Camera inspection is included with most drain services and is always recommended before major repairs. It shows the exact condition of your pipes so you can make informed decisions.',
			),
			array(
				'q' => 'How often should I have my San Carlos sewer line cleaned?',
				'a' => 'For homes with mature trees nearby, we recommend hydro jetting every 18-24 months as preventive maintenance. This clears roots and buildup before they cause backups.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-del-cerro', 'name' => 'Del Cerro' ),
			array( 'slug' => 'plumber-in-santee', 'name' => 'Santee' ),
			array( 'slug' => 'plumber-in-la-mesa', 'name' => 'La Mesa' ),
			array( 'slug' => 'plumber-in-college-area', 'name' => 'College Area' ),
		),
	),

	'plumber-in-del-cerro' => array(
		'name'        => 'Del Cerro',
		'h1'          => 'Plumber in Del Cerro — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Hillside plumbing specialists for Del Cerro homes. Expert drainage, leak detection, and repair.',
		'intro'       => '<p>Del Cerro is a hillside community where the terrain creates unique plumbing challenges. Homes along Del Cerro Boulevard, College Avenue, and the streets surrounding Cowles Mountain often have longer sewer laterals running downhill to the main, which makes them susceptible to debris accumulation and root intrusion at grade changes.</p><p>Slab leaks are also common in the area\'s mid-century homes built on sloped pads. Our leak detection equipment and camera inspection capabilities are essential for diagnosing problems in Del Cerro\'s challenging topography without unnecessary excavation.</p>',
		'map_query'   => 'Del Cerro, San Diego, CA',
		'testimonial' => array(
			'quote'    => 'Slab leak under the kitchen. They used electronic detection to pinpoint it exactly and re-routed without tearing up the whole floor. Saved us thousands.',
			'name'     => 'Rachel Kim',
			'location' => 'Del Cerro',
			'service'  => 'Leak Detection',
		),
		'faqs'        => array(
			array(
				'q' => 'Why do Del Cerro homes have more sewer problems?',
				'a' => 'Hillside lots mean longer sewer laterals with steeper grades. Debris accumulates at grade transitions, and shifting soil stresses pipe joints. Regular camera inspections catch problems before they become emergencies.',
			),
			array(
				'q' => 'Do you handle slab leaks on sloped Del Cerro lots?',
				'a' => 'Yes. Slab leaks are common in Del Cerro\'s mid-century homes built on sloped pads. We use electronic and thermal detection to locate leaks precisely, then repair or reroute with minimal concrete demolition.',
			),
			array(
				'q' => 'What drainage solutions do you offer for hillside homes?',
				'a' => 'We address hillside drainage with proper grading, drain line maintenance, and hydro jetting for long sewer runs. Camera inspection identifies low spots and grade changes where debris collects.',
			),
			array(
				'q' => 'How do I prevent sewer backups in my Del Cerro home?',
				'a' => 'Preventive hydro jetting every 18-24 months is the best defense for hillside sewer lines. We also install cleanout access points that make future maintenance faster and less expensive.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-san-carlos', 'name' => 'San Carlos' ),
			array( 'slug' => 'plumber-in-la-mesa', 'name' => 'La Mesa' ),
			array( 'slug' => 'plumber-in-college-area', 'name' => 'College Area' ),
			array( 'slug' => 'plumber-in-santee', 'name' => 'Santee' ),
		),
	),

	'plumber-in-college-area' => array(
		'name'        => 'College Area',
		'h1'          => 'Plumber in College Area — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Fast plumbing service near SDSU. Landlord-friendly, tenant-friendly, and always professional.',
		'intro'       => '<p>The College Area around San Diego State University is a high-density neighborhood with a mix of single-family homes, duplexes, and apartment buildings. Landlords and property managers make up a significant portion of our client base here — they need fast-response plumbing that minimizes tenant disruption.</p><p>Recurring issues in the College Area include clogged drains in multi-unit buildings, aging water heaters in rental properties, and sewer line problems under older homes along Montezuma Road and El Cajon Boulevard. We offer priority scheduling for property managers and can handle multiple units on the same visit.</p>',
		'map_query'   => 'College Area, San Diego, CA',
		'testimonial' => array(
			'quote'    => 'I manage several rental properties in Spring Valley. RD is the only plumber I call now. Fast, reliable, and they document everything so I can share with owners. Game changer.',
			'name'     => 'Jon Rafferty',
			'location' => 'College Area',
			'service'  => 'Commercial Service',
		),
		'faqs'        => array(
			array(
				'q' => 'Do you offer priority scheduling for property managers?',
				'a' => 'Yes. Landlords and property managers in the College Area get priority scheduling. We understand that plumbing issues in rental properties need fast resolution to keep tenants satisfied.',
			),
			array(
				'q' => 'Can you handle drain cleaning for apartment buildings?',
				'a' => 'Absolutely. We clear main drain lines and individual unit drains in multi-unit buildings. Our hydro jetting equipment handles the heavy buildup common in high-density rental properties.',
			),
			array(
				'q' => 'How do you minimize disruption to tenants?',
				'a' => 'We schedule around tenant availability, complete work efficiently, and clean up thoroughly. For property managers, we provide documentation and photos of all work performed.',
			),
			array(
				'q' => 'What water heater options work best for rental properties?',
				'a' => 'Standard 40-50 gallon tank heaters are the most cost-effective for rentals. For multi-unit buildings, we can install commercial tankless systems that serve multiple units efficiently.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-del-cerro', 'name' => 'Del Cerro' ),
			array( 'slug' => 'plumber-in-la-mesa', 'name' => 'La Mesa' ),
			array( 'slug' => 'plumber-in-lemon-grove', 'name' => 'Lemon Grove' ),
			array( 'slug' => 'plumber-in-san-carlos', 'name' => 'San Carlos' ),
		),
	),

	'plumber-in-east-san-diego' => array(
		'name'        => 'East San Diego',
		'h1'          => 'Plumber in East San Diego — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Your local East San Diego plumbing team. City Heights, Oak Park, and all surrounding neighborhoods.',
		'intro'       => '<p>East San Diego encompasses several diverse neighborhoods including City Heights, Oak Park, Chollas View, and the areas along University Avenue and Fairmount Avenue. This is some of San Diego\'s oldest housing stock, with many homes built in the 1930s–50s featuring original plumbing systems that are well past their expected lifespan.</p><p>Galvanized pipes, clay sewer lines, and undersized water heaters are the norm. We specialize in bringing older East San Diego homes up to modern plumbing standards — from full repipes to sewer line replacement and tankless water heater upgrades. Our licensed team handles the unique challenges of working in older homes with care and precision.</p>',
		'map_query'   => 'East San Diego, San Diego, CA',
		'testimonial' => array(
			'quote'    => 'Honest pricing, clean work, and they took the time to show me the camera footage before and after. First plumber I\'ve used who treated me like I could understand the problem.',
			'name'     => 'David Nguyen',
			'location' => 'East San Diego',
			'service'  => 'Drain & Sewer Repair',
		),
		'faqs'        => array(
			array(
				'q' => 'Can you work on plumbing in pre-1950s East San Diego homes?',
				'a' => 'Yes. We specialize in older home plumbing. Pre-1950s homes often have galvanized supply pipes, clay sewer lines, and outdated fixture connections. We modernize these systems while respecting the home\'s character.',
			),
			array(
				'q' => 'How much does it cost to repipe an older East San Diego home?',
				'a' => 'Cost depends on home size, number of fixtures, and material choice. We provide free, no-obligation estimates with a written quote. Many older East San Diego homes range from $4,000-$12,000 for a full repipe.',
			),
			array(
				'q' => 'Do you replace clay sewer lines in older neighborhoods?',
				'a' => 'Yes. Clay sewer lines in City Heights, Oak Park, and surrounding neighborhoods are often 60-90 years old and cracked or collapsed. We offer traditional and trenchless replacement options.',
			),
			array(
				'q' => 'What are affordable plumbing upgrade options for older homes?',
				'a' => 'We prioritize repairs by urgency. A sewer camera inspection identifies what actually needs fixing vs. what can wait. Not every old pipe needs immediate replacement — we give you an honest assessment and phased plan.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-college-area', 'name' => 'College Area' ),
			array( 'slug' => 'plumber-in-la-mesa', 'name' => 'La Mesa' ),
			array( 'slug' => 'plumber-in-lemon-grove', 'name' => 'Lemon Grove' ),
			array( 'slug' => 'north-park', 'name' => 'North Park' ),
		),
	),

	'plumber-in-ramona' => array(
		'name'        => 'Ramona',
		'h1'          => 'Plumber in Ramona — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Serving Ramona\'s ranch properties and rural homes. Septic, well water, and full-service plumbing.',
		'intro'       => '<p>Ramona is a rural community northeast of San Diego where large-lot properties, equestrian estates, and agricultural land are the norm. Many homes here are on private wells and septic systems, making our C42 Sanitation license especially valuable. Plumbing runs tend to be longer on Ramona properties, and the area\'s hard well water causes accelerated sediment buildup in water heaters and mineral scale in supply lines.</p><p>We serve Ramona homeowners along Main Street, San Vicente Road, and Dye Road with the same diagnostic-first approach we bring to every East County job — camera inspections before hydro jetting, written estimates before work, and code-compliant results.</p>',
		'map_query'   => 'Ramona, CA',
		'testimonial' => array(
			'quote'    => 'Tankless water heater install took one day and the quote was exactly what they charged. Professional crew, respected the house, cleaned everything up. Highly recommend.',
			'name'     => 'Sandra Ortiz',
			'location' => 'Ramona',
			'service'  => 'Water Heater',
		),
		'faqs'        => array(
			array(
				'q' => 'Do you service septic systems on Ramona ranch properties?',
				'a' => 'Yes. We hold a C42 Sanitation license and regularly service septic systems on Ramona\'s larger properties. We handle inspections, diagnostics, tank pumping, repairs, and full system replacements.',
			),
			array(
				'q' => 'Can you help with well water treatment in Ramona?',
				'a' => 'Absolutely. Ramona\'s well water tends to be hard and mineral-heavy. We install water softeners, whole-house filtration systems, and sediment filters to protect your plumbing and appliances.',
			),
			array(
				'q' => 'How do you maintain longer pipe runs on Ramona properties?',
				'a' => 'Large Ramona lots often have 100+ foot sewer and water lines. We use hydro jetting to clear the full length and camera inspection to identify problem areas — root intrusion, bellies, and joint separations — before they cause failures.',
			),
			array(
				'q' => 'Why does my water heater fail faster in Ramona?',
				'a' => 'Ramona\'s hard well water accelerates sediment buildup inside tank water heaters, reducing efficiency and shortening lifespan. Annual flushing helps, and tankless units with descaling maintenance are a better long-term option.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-lakeside', 'name' => 'Lakeside' ),
			array( 'slug' => 'plumber-in-alpine', 'name' => 'Alpine' ),
			array( 'slug' => 'plumber-in-poway', 'name' => 'Poway' ),
			array( 'slug' => 'julian', 'name' => 'Julian' ),
		),
	),

	'plumber-in-poway' => array(
		'name'        => 'Poway',
		'h1'          => 'Plumber in Poway — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'The City in the Country deserves country-strong plumbing. Licensed service for Poway homes and businesses.',
		'intro'       => '<p>Poway blends suburban neighborhoods with semi-rural properties on its eastern edge, creating two distinct plumbing profiles. Homes in the established neighborhoods near Poway Road, Twin Peaks Road, and Espola Road were primarily built in the 1970s–80s and are now hitting the age where sewer line deterioration, water heater failure, and supply pipe corrosion become common.</p><p>The larger properties in eastern Poway toward Ramona often rely on private wells and septic systems. We handle both — from standard residential drain cleaning and water heater replacement in the suburban core to septic inspections and well water plumbing on the rural fringe.</p>',
		'map_query'   => 'Poway, CA',
		'testimonial' => array(
			'quote'    => 'We\'d had three plumbers out in two years for the same recurring clog. RD ran the camera, found grease buildup the others missed, and hydro-jetted the line. No issues since.',
			'name'     => 'Karen Walsh',
			'location' => 'Poway',
			'service'  => 'Hydro Jetting',
		),
		'faqs'        => array(
			array(
				'q' => 'What plumbing issues are common in 70s-80s Poway homes?',
				'a' => 'Homes from this era often have aging copper or galvanized supply pipes, cast iron drain lines, and original water heaters that are well past their lifespan. Sewer line corrosion and slab leaks are the most common calls we get in established Poway neighborhoods.',
			),
			array(
				'q' => 'Do you handle septic systems in eastern Poway?',
				'a' => 'Yes. We\'re C42 Sanitation licensed for septic work. Properties on Poway\'s rural eastern edge often use septic systems that need regular inspection and maintenance. We handle the full range — inspections, pump-outs, repairs, and replacements.',
			),
			array(
				'q' => 'When should I replace my water heater in Poway?',
				'a' => 'Tank water heaters typically last 10-15 years. If your Poway home was built in the 70s-80s, you\'re likely on the second or third unit. We assess condition and recommend repair vs. replacement — and can upgrade you to a tankless system for better efficiency.',
			),
			array(
				'q' => 'Do you serve commercial properties on Poway Road?',
				'a' => 'Yes. We handle commercial plumbing along Poway Road and throughout the business district — hydro jetting for grease lines, drain maintenance, water heater service, and emergency response for restaurants, retail, and office properties.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-ramona', 'name' => 'Ramona' ),
			array( 'slug' => 'plumber-in-santee', 'name' => 'Santee' ),
			array( 'slug' => 'plumber-in-san-carlos', 'name' => 'San Carlos' ),
			array( 'slug' => 'rancho-bernardo', 'name' => 'Rancho Bernardo' ),
		),
	),

	'plumber-in-pine-valley' => array(
		'name'        => 'Pine Valley',
		'h1'          => 'Plumber in Pine Valley — Licensed Plumbing & Hydro Jetting',
		'subtitle'    => 'Mountain plumbing for Pine Valley and the backcountry. Septic, freeze protection, and emergency service.',
		'intro'       => '<p>Pine Valley sits at over 3,700 feet elevation in the Laguna Mountains, and its plumbing needs are different from anywhere else in East County. Freezing temperatures in winter put exposed pipes at serious risk, and many properties rely entirely on septic systems and well water. Our C42 Sanitation license covers the septic work that mountain properties require, and we understand the freeze protection measures — pipe insulation, heat tape, and proper winterization — that Pine Valley homes need.</p><p>We also serve the surrounding backcountry communities including Guatay and Descanso. When a pipe bursts at 4,000 feet on a January night, we answer the phone.</p>',
		'map_query'   => 'Pine Valley, CA',
		'testimonial' => array(
			'quote'    => 'Tankless water heater install took one day and the quote was exactly what they charged. Professional crew, respected the house, cleaned everything up. Highly recommend.',
			'name'     => 'Sandra Ortiz',
			'location' => 'Pine Valley',
			'service'  => 'Water Heater',
		),
		'faqs'        => array(
			array(
				'q' => 'Can you protect my Pine Valley pipes from freezing?',
				'a' => 'Yes. Pine Valley\'s elevation means sub-freezing winter temperatures. We insulate exposed pipes, install heat tape on vulnerable runs, and can reroute pipes away from exterior walls and unheated crawlspaces to prevent freeze damage.',
			),
			array(
				'q' => 'Do you service septic systems in Pine Valley?',
				'a' => 'Absolutely. We\'re C42 Sanitation licensed — one of the few East County plumbers certified for septic work. We handle inspections, diagnostics, pump coordination, repairs, and full system replacements at elevation.',
			),
			array(
				'q' => 'How fast can an emergency plumber reach Pine Valley?',
				'a' => 'Pine Valley is at the outer edge of our service area. Emergency response is typically within 90-120 minutes depending on conditions. For winter pipe bursts, we prioritize mountain calls because we know the damage compounds fast.',
			),
			array(
				'q' => 'Do you serve Guatay and Descanso too?',
				'a' => 'Yes. We serve the broader backcountry area including Guatay, Descanso, and the surrounding Laguna Mountain communities. The same freeze protection and septic expertise applies throughout.',
			),
		),
		'nearby'      => array(
			array( 'slug' => 'plumber-in-alpine', 'name' => 'Alpine' ),
			array( 'slug' => 'plumber-in-ramona', 'name' => 'Ramona' ),
			array( 'slug' => 'descanso', 'name' => 'Descanso' ),
			array( 'slug' => 'julian', 'name' => 'Julian' ),
		),
	),

);

// Slugs that do NOT have their own service area page (render as span, not link).
$no_page_slugs = array( 'north-park', 'rancho-bernardo', 'julian', 'descanso' );

// =========================================================================
// Resolve current city
// =========================================================================
$slug     = get_post_field( 'post_name', get_post() );
$city_key = $slug;

if ( ! isset( $cities[ $city_key ] ) ) {
	// Try with 'plumber-in-' prefix.
	$city_key = 'plumber-in-' . preg_replace( '/^plumber-in-/', '', $slug );
}

// Still not found? Default to El Cajon.
$city = isset( $cities[ $city_key ] ) ? $cities[ $city_key ] : $cities['plumber-in-el-cajon'];

$services = bmg_get_services();

// Why-choose-us values.
$values = array(
	array(
		'title' => __( 'Licensed &amp; Certified', 'bmg-theme' ),
		'desc'  => __( 'CA CSLB #1076642 — C-36 Plumbing, C-42 Sanitation, C-20 HVAC', 'bmg-theme' ),
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>',
	),
	array(
		'title' => __( 'Honest Pricing', 'bmg-theme' ),
		'desc'  => __( 'Written estimates before work begins — no surprises, no hidden fees', 'bmg-theme' ),
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="9" y1="7" x2="15" y2="7"/><line x1="9" y1="11" x2="15" y2="11"/><line x1="9" y1="15" x2="13" y2="15"/></svg>',
	),
	array(
		'title' => __( 'Equipped for Any Job', 'bmg-theme' ),
		'desc'  => __( 'Camera inspection, hydro jetting, trenchless repair — we bring it all', 'bmg-theme' ),
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
	),
	array(
		'title' => __( 'Always On Time', 'bmg-theme' ),
		'desc'  => __( 'Same-day service and 24/7 emergency response across East County', 'bmg-theme' ),
		'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
	),
);

get_header();
?>

<!-- LocalBusiness + FAQPage Schema -->
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@graph": [
		{
			"@type": "LocalBusiness",
			"@id": "<?php echo esc_url( home_url( '/' ) ); ?>#business",
			"name": "RD Hydrojet Plumbing & Drain Inc.",
			"url": "<?php echo esc_url( home_url( '/' ) ); ?>",
			"telephone": "<?php echo esc_attr( $phone_display ); ?>",
			"email": "<?php echo esc_attr( $email ); ?>",
			"priceRange": "$$",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "East San Diego County",
				"addressRegion": "CA",
				"addressCountry": "US"
			},
			"areaServed": {
				"@type": "City",
				"name": "<?php echo esc_js( $city['name'] ); ?>"
			}
		},
		{
			"@type": "FAQPage",
			"@id": "<?php echo esc_url( get_permalink() ); ?>#faq",
			"mainEntity": [
				<?php
				$schema_faqs = array();
				foreach ( $city['faqs'] as $faq ) {
					$schema_faqs[] = sprintf(
						'{
							"@type": "Question",
							"name": "%s",
							"acceptedAnswer": {
								"@type": "Answer",
								"text": "%s"
							}
						}',
						esc_js( $faq['q'] ),
						esc_js( $faq['a'] )
					);
				}
				echo implode( ",\n", $schema_faqs ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				?>
			]
		}
	]
}
</script>

<main id="main" class="site-main">

	<!-- Section 1: Hero -->
	<section class="section-sd-hero section-dark">
		<div class="section-sd-hero__bg" aria-hidden="true"></div>
		<div class="container section-sd-hero__container">
			<nav class="section-sd-hero__breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'bmg-theme' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'bmg-theme' ); ?></a>
				<span aria-hidden="true">/</span>
				<span><?php esc_html_e( 'Service Areas', 'bmg-theme' ); ?></span>
				<span aria-hidden="true">/</span>
				<span><?php echo esc_html( $city['name'] ); ?></span>
			</nav>
			<h1 class="section-sd-hero__title bmg-reveal"><?php echo esc_html( $city['h1'] ); ?></h1>
			<p class="section-sd-hero__sub bmg-reveal"><?php echo esc_html( $city['subtitle'] ); ?></p>
			<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn btn-cta-primary section-sd-hero__cta bmg-reveal d-inline-flex align-items-center gap-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
				<span><?php echo esc_html( $phone_display ); ?></span>
			</a>
		</div>
	</section>

	<!-- Section 2: City Intro -->
	<section class="section-area-intro">
		<div class="container">
			<div class="row align-items-center gy-5">
				<div class="col-lg-6 bmg-reveal">
					<span class="section-pill"><?php
						/* translators: %s city name uppercase */
						printf( esc_html__( 'ABOUT %s SERVICE', 'bmg-theme' ), esc_html( strtoupper( $city['name'] ) ) );
					?></span>
					<div class="section-area-intro__text">
						<?php echo wp_kses_post( $city['intro'] ); ?>
					</div>
				</div>
				<div class="col-lg-6 bmg-reveal">
					<!--
						Google Maps embed placeholder.
						Replace GOOGLE_MAPS_KEY with an actual Google Maps Embed API key.
						Example src: https://www.google.com/maps/embed/v1/place?key=GOOGLE_MAPS_KEY&q=<?php echo esc_attr( rawurlencode( $city['map_query'] ) ); ?>
					-->
					<div class="section-area-intro__map-placeholder" aria-label="<?php
						/* translators: %s city name */
						printf( esc_attr__( 'Map of %s', 'bmg-theme' ), esc_attr( $city['name'] ) );
					?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						<span class="section-area-intro__map-label"><?php echo esc_html( $city['name'] ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 3: Services Grid -->
	<section class="section-area-services">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'OUR SERVICES', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php
					/* translators: %s city name */
					printf( esc_html__( 'Plumbing Services in %s', 'bmg-theme' ), esc_html( $city['name'] ) );
				?></h2>
			</div>
			<div class="row g-4 bmg-reveal-stagger">
				<?php foreach ( $services as $service ) : ?>
					<div class="col-md-6 col-lg-4 bmg-reveal">
						<a
							href="<?php echo esc_url( home_url( $service['link'] ) ); ?>"
							class="section-services__card"
						>
							<div class="section-services__card-icon" aria-hidden="true">
								<?php echo $service['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<h3 class="section-services__card-title"><?php echo wp_kses_post( $service['title'] ); ?></h3>
							<p class="section-services__card-desc"><?php echo esc_html( $service['desc'] ); ?></p>
							<ul class="section-services__card-bullets list-unstyled">
								<?php foreach ( $service['bullets'] as $bullet ) : ?>
									<li>
										<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
										<?php echo wp_kses_post( $bullet ); ?>
									</li>
								<?php endforeach; ?>
							</ul>
							<span class="section-services__card-link">
								<?php esc_html_e( 'Learn More', 'bmg-theme' ); ?>
								<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
							</span>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Section 4: Why Choose Us -->
	<section class="section-values section-dark">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'WHY RD HYDROJET', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php
					/* translators: %s city name */
					printf( esc_html__( 'Why %s Homeowners Trust RD Hydrojet', 'bmg-theme' ), esc_html( $city['name'] ) );
				?></h2>
			</div>
			<div class="row gy-4 justify-content-center text-center bmg-reveal-stagger">
				<?php foreach ( $values as $value ) : ?>
					<div class="col-6 col-lg-3 bmg-reveal">
						<div class="section-values__item">
							<div class="section-values__icon" aria-hidden="true">
								<?php echo $value['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</div>
							<h3 class="section-values__label"><?php echo wp_kses_post( $value['title'] ); ?></h3>
							<p class="section-values__sub"><?php echo esc_html( $value['desc'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Section 5: Featured Testimonial -->
	<section class="section-area-testimonial">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'TESTIMONIAL', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php
					/* translators: %s city name */
					printf( esc_html__( 'What %s Residents Say', 'bmg-theme' ), esc_html( $city['name'] ) );
				?></h2>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-8 bmg-reveal">
					<div class="section-area-testimonial__card text-center">
						<div class="section-area-testimonial__stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'bmg-theme' ); ?>">
							<?php for ( $i = 0; $i < 5; $i++ ) : ?>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
							<?php endfor; ?>
						</div>
						<blockquote class="section-area-testimonial__quote">
							<?php echo esc_html( $city['testimonial']['quote'] ); ?>
						</blockquote>
						<div class="section-area-testimonial__author">
							<span class="section-area-testimonial__name"><?php echo esc_html( $city['testimonial']['name'] ); ?></span>
							<span class="section-area-testimonial__location"><?php echo esc_html( $city['testimonial']['location'] ); ?></span>
						</div>
						<span class="section-area-testimonial__service"><?php echo esc_html( $city['testimonial']['service'] ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 6: FAQ -->
	<section id="faq" class="section-faq">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'FAQ', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php
					/* translators: %s city name */
					printf( esc_html__( 'Plumbing Questions from %s Homeowners', 'bmg-theme' ), esc_html( $city['name'] ) );
				?></h2>
			</div>
			<div class="row justify-content-center bmg-reveal">
				<div class="col-lg-9">
					<div class="section-faq__accordion accordion" id="areaFaqAccordion">
						<?php foreach ( $city['faqs'] as $index => $faq ) :
							$faq_id     = 'area-faq-' . ( $index + 1 );
							$heading_id = $faq_id . '-heading';
							$collapsed  = ( 0 === $index ) ? '' : 'collapsed';
							$expanded   = ( 0 === $index ) ? 'true' : 'false';
							$show       = ( 0 === $index ) ? ' show' : '';
							?>
							<div class="accordion-item">
								<h3 class="accordion-header" id="<?php echo esc_attr( $heading_id ); ?>">
									<button
										class="accordion-button <?php echo esc_attr( $collapsed ); ?>"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#<?php echo esc_attr( $faq_id ); ?>"
										aria-expanded="<?php echo esc_attr( $expanded ); ?>"
										aria-controls="<?php echo esc_attr( $faq_id ); ?>"
									>
										<?php echo esc_html( $faq['q'] ); ?>
									</button>
								</h3>
								<div
									id="<?php echo esc_attr( $faq_id ); ?>"
									class="accordion-collapse collapse<?php echo esc_attr( $show ); ?>"
									aria-labelledby="<?php echo esc_attr( $heading_id ); ?>"
									data-bs-parent="#areaFaqAccordion"
								>
									<div class="accordion-body">
										<?php echo esc_html( $faq['a'] ); ?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 7: Neighboring Areas -->
	<?php if ( ! empty( $city['nearby'] ) ) : ?>
		<section class="section-area-nearby">
			<div class="container">
				<div class="text-center mb-4 bmg-reveal">
					<h2 class="section-title"><?php esc_html_e( 'Also Serving Nearby', 'bmg-theme' ); ?></h2>
				</div>
				<div class="section-service-areas__pills justify-content-center bmg-reveal">
					<?php foreach ( $city['nearby'] as $nearby ) : ?>
						<?php if ( in_array( $nearby['slug'], $no_page_slugs, true ) ) : ?>
							<span class="section-service-areas__pill"><?php echo esc_html( $nearby['name'] ); ?></span>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' . $nearby['slug'] . '/' ) ); ?>" class="section-service-areas__pill"><?php echo esc_html( $nearby['name'] ); ?></a>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<!-- Section 8: CTA -->
	<?php get_template_part( 'template-parts/sections/section', 'cta' ); ?>

</main>

<?php
get_footer();
