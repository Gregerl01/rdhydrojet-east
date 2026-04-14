<?php
/**
 * Starter Blog Posts
 *
 * Creates initial blog content on first run. Wrapped in option check
 * so it only executes once.
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Create starter blog posts and categories.
 */
function bmg_create_starter_posts() {
	// Only run once.
	if ( get_option( 'bmg_starter_posts_created' ) ) {
		return;
	}

	// --- Create categories ---
	$categories = array(
		array(
			'cat_name'             => 'Drain Cleaning',
			'category_nicename'    => 'drain-cleaning',
			'category_description' => 'Drain cleaning tips, hydro jetting, and sewer maintenance.',
		),
		array(
			'cat_name'             => 'Water Heaters',
			'category_nicename'    => 'water-heaters',
			'category_description' => 'Water heater repair, replacement, and maintenance guides.',
		),
		array(
			'cat_name'             => 'Sewer & Drain',
			'category_nicename'    => 'sewer-drain',
			'category_description' => 'Sewer line inspection, repair, and replacement information.',
		),
	);

	$category_ids = array();

	foreach ( $categories as $cat ) {
		$existing = get_cat_ID( $cat['cat_name'] );
		if ( $existing ) {
			$category_ids[ $cat['category_nicename'] ] = $existing;
		} else {
			$result = wp_insert_term( $cat['cat_name'], 'category', array(
				'slug'        => $cat['category_nicename'],
				'description' => $cat['category_description'],
			) );
			if ( ! is_wp_error( $result ) ) {
				$category_ids[ $cat['category_nicename'] ] = $result['term_id'];
			}
		}
	}

	// --- Post 1: Hydro Jetting vs Drain Snaking ---
	$post1_content = <<<'HTML'
<p>When a drain backs up, most homeowners reach for the phone and ask for a drain snake. It makes sense — snaking is the service most people know, and it's usually the cheapest option on the invoice. But snaking has real limitations, and in many situations, it's the wrong tool for the job. If your plumber keeps coming back to snake the same drain, there's a reason the problem isn't going away.</p>

<p>Hydro jetting uses a specialized nozzle that delivers high-pressure water (typically 3,000-4,000 PSI) through your drain and sewer lines. Instead of punching a narrow hole through a clog the way a snake does, hydro jetting scours the entire interior surface of the pipe, removing grease, scale, roots, and debris. Here are five signs that hydro jetting — not another snake call — is what your plumbing actually needs.</p>

<h2>1. Your Clogs Keep Coming Back</h2>

<p>A drain snake is a metal cable with a cutting head on the end. When your plumber feeds it into a clogged pipe, it bores through the blockage and restores flow. The problem is that it only creates a narrow channel through the clog — it doesn't clean the pipe wall. Grease, mineral scale, soap scum, and organic buildup remain plastered to the inside of the pipe, and that buildup starts restricting flow again almost immediately.</p>

<p>If you've had the same drain snaked two or three times in the past year, the snake is treating the symptom while the underlying problem gets worse. Each time the snake passes through, the remaining buildup continues to accumulate, and the intervals between clogs get shorter. Hydro jetting removes all of it — the full circumference of the pipe interior gets cleaned back to near-original diameter. For most homes, a single hydro jetting service keeps drains flowing freely for 18 to 24 months.</p>

<h2>2. Multiple Drains Are Slow at the Same Time</h2>

<p>When your kitchen sink, shower, and washing machine all drain slowly at the same time, you don't have three separate clogs. You have one problem: a blockage or buildup in your main sewer line. Every drain in your house feeds into the main line, so when the main line is restricted, everything upstream slows down.</p>

<p>Snaking a single fixture — the kitchen sink, for example — won't solve a mainline issue. Even if you snake the main line itself, you're still only punching a hole through the obstruction. Hydro jetting clears the entire main sewer line from the cleanout at your house to the connection at the street. The high-pressure water flushes debris downstream and out of your system entirely, restoring full flow to every drain in your home.</p>

<h2>3. Camera Inspection Shows Buildup on Pipe Walls</h2>

<p>At RD Hydrojet, we use sewer camera inspections before recommending any service. The camera shows us — and you — exactly what's happening inside your pipes. If the camera reveals grease coating the pipe walls, mineral scale narrowing the diameter, or accumulated debris clinging to the interior surface, hydro jetting is the only method that effectively removes it.</p>

<p>A snake slides right past wall buildup without touching it. The cutting head is designed to break through blockages in the center of the pipe, not scrape the walls. So even after a successful snake job, all that wall buildup remains in place, continuing to narrow the pipe and catch new debris. Hydro jetting's 360-degree spray pattern strips buildup off the pipe walls entirely, which is why a camera inspection often shows a dramatic difference in pipe condition before and after the service.</p>

<h2>4. Tree Roots Have Invaded Your Sewer Line</h2>

<p>East San Diego County is full of mature trees, and neighborhoods like San Carlos, La Mesa, and El Cajon have extensive root systems that seek out moisture. Tree roots find their way into sewer lines through small cracks and joint separations, especially in older clay and cast iron pipes. Once inside, they grow rapidly — a small root hair can become a dense root mass in a single growing season.</p>

<p>Snaking cuts through roots, but it's a temporary fix. The snake's cutting head slices the root mass, restoring flow for a few weeks or months. But the roots are still alive at the entry point, and they regrow quickly. Many homeowners end up on a cycle of root snaking every three to six months, spending hundreds of dollars each time without ever solving the problem.</p>

<p>Hydro jetting doesn't just cut through roots — it blasts them out of the pipe entirely and flushes the debris downstream. Combined with a root-inhibiting treatment applied to the pipe interior, hydro jetting provides significantly longer-lasting results. Many East County homes built in the 1960s and 70s have clay sewer lines that are especially vulnerable to root intrusion at every joint, making hydro jetting the most effective maintenance strategy.</p>

<h2>5. You Smell Sewage or Notice Foul Odors</h2>

<p>Persistent sewer smells coming from floor drains, bathroom fixtures, or your yard are more than just unpleasant — they indicate that organic matter is accumulating inside your drain or sewer line. Partial blockages trap waste material, which decomposes and produces hydrogen sulfide gas (the classic rotten egg smell). These odors can also indicate a belly or low spot in the pipe where waste collects and stagnates.</p>

<p>Snaking may temporarily break through a partial blockage, but it won't remove the organic buildup coating the pipe walls that's generating the odor. Hydro jetting pressurizes the entire line, stripping away the layer of decomposing organic matter and flushing it out of the system. After hydro jetting, the pipe interior is clean enough that there's nothing left to produce odor.</p>

<h2>What Does Hydro Jetting Cost vs. Repeated Snake Calls?</h2>

<p>A single hydro jetting service typically runs between $350 and $800, depending on the line length and access. Standard drain snaking costs $150 to $300 per visit. At first glance, snaking looks like the better deal. But do the math on recurring problems.</p>

<p>If you're calling for snaking two to three times per year at $200 per visit, you're spending $400 to $600 annually — and the problem keeps getting worse. A single hydro jetting service every 18 to 24 months costs less over time and actually solves the underlying issue. You also avoid the emergency weekend calls when a chronic clog finally causes a full backup into your home, which can mean water damage, cleanup costs, and a much larger bill.</p>

<h2>Start with a Camera Inspection</h2>

<p>We always begin with a sewer camera inspection before recommending hydro jetting. The camera shows us the exact condition of your pipes — the type of buildup, the location and severity of blockages, and whether there's any structural damage that needs to be addressed first. Hydro jetting isn't the right solution for every situation (for example, pipes with significant structural damage may need repair before jetting), and we won't recommend a service you don't need.</p>

<p>The camera inspection takes about 30 minutes, and you watch the footage with us in real time. You'll see exactly what we see, so there's no guesswork involved in the recommendation.</p>

<p><a href="/services/hydro-jetting/">Learn more about our hydro jetting service</a></p>
<p><a href="/services/drain-cleaning/">Drain and sewer repair services</a></p>

<p><strong>If your drains keep clogging despite repeated snaking, call RD Hydrojet at <a href="tel:6195711777">(619) 571-1777</a> for a camera inspection. We'll show you exactly what's happening inside your pipes and recommend the right fix — no guesswork, no upselling.</strong></p>
HTML;

	$post1_id = wp_insert_post(
		array(
			'post_title'   => '5 Signs You Need Hydro Jetting Instead of Drain Snaking',
			'post_name'    => '5-signs-you-need-hydro-jetting',
			'post_content' => $post1_content,
			'post_excerpt' => 'Recurring clogs, slow drains, and sewer smells often mean a snake isn\'t enough. Here are 5 signs your pipes need hydro jetting instead.',
			'post_status'  => 'publish',
			'post_type'    => 'post',
			'post_date'    => '2026-03-15 09:00:00',
			'post_author'  => 1,
		)
	);

	if ( $post1_id && ! is_wp_error( $post1_id ) && isset( $category_ids['drain-cleaning'] ) ) {
		wp_set_post_categories( $post1_id, array( $category_ids['drain-cleaning'] ) );
	}

	// --- Post 2: Water Heater Replacement Guide ---
	$post2_content = <<<'HTML'
<p>Water heaters don't usually fail all at once. They deteriorate gradually — a little less hot water, a strange noise you learn to ignore, a slight increase in your gas bill that blends in with seasonal rate changes. Most homeowners don't think about their water heater until they're standing in a cold shower or discover a puddle spreading across the garage floor. By then, you're making an emergency decision instead of a planned one.</p>

<p>Knowing the warning signs of a failing water heater gives you time to research options, get quotes, and schedule the replacement on your terms. Here's what to watch for.</p>

<h2>Check the Age First</h2>

<p>The single most important factor in water heater lifespan is age. Standard tank water heaters — the type found in most East San Diego County homes — typically last 8 to 12 years. Tankless (on-demand) water heaters last 15 to 20 years with proper maintenance.</p>

<p>To find the age of your water heater, look for the manufacturer's label on the side of the unit. The serial number usually encodes the manufacture date — the first two digits often represent the year, or the manufacturer uses a letter code for the month and digits for the year. If you can't decode it, search the manufacturer's website or give us a call and we'll help you figure it out.</p>

<p>If your tank water heater is over 10 years old, it's not necessarily failing today, but you should start planning for replacement. Waiting until it fails completely usually means emergency service rates, limited equipment options, and the potential for water damage if the tank ruptures.</p>

<h2>Rusty or Discolored Hot Water</h2>

<p>Run your hot water for a minute and look at the color. If the hot water comes out rusty, brownish, or with visible particles — but the cold water runs clear — the problem is inside the water heater tank, not your supply pipes.</p>

<p>Every tank water heater has a sacrificial anode rod — a metal rod (usually magnesium or aluminum) that's designed to corrode instead of the tank itself. It's a deliberate engineering choice: the anode rod attracts corrosive elements in the water so the steel tank stays intact. But once the anode rod is fully consumed, corrosion turns to the tank itself.</p>

<p>If you catch it early, replacing the anode rod (a $150-$250 service) can extend the tank's life by several years. But once rust appears in the hot water, the tank's interior lining has been compromised. At that point, replacement is the only reliable option — no amount of anode rod replacement will reverse existing corrosion.</p>

<h2>Rumbling, Popping, or Banging Noises</h2>

<p>Sediment — dissolved minerals from your water supply — settles at the bottom of tank water heaters over time. East San Diego County has notably hard water, which means higher mineral content and faster sediment accumulation. As sediment hardens into a thick layer at the bottom of the tank, it insulates the water from the burner (gas units) or heating element (electric units).</p>

<p>When the burner fires, water trapped beneath the sediment layer superheats and creates steam bubbles that pop through the sediment. That's the rumbling, popping, or banging noise you hear. It's not dangerous in the short term, but it's a clear sign that your water heater is working much harder than it should be. The extra effort means higher gas or electric bills and accelerated wear on the tank.</p>

<p>Annual tank flushing — draining a few gallons from the bottom valve to flush out loose sediment — helps prevent this buildup. But if your heater has never been flushed and it's now making noise, the sediment may be too compacted to remove effectively. At that point, the damage is ongoing and replacement becomes the practical choice.</p>

<h2>Inconsistent Water Temperature</h2>

<p>If your hot water temperature swings between hot and lukewarm during a single shower, or if the water doesn't get as hot as it used to, internal components are likely failing. On gas water heaters, the gas control valve or thermocouple may be wearing out. On electric units, one of the two heating elements may have failed, cutting your heating capacity in half.</p>

<p>For newer water heaters (under 6-7 years old), single-component repairs are usually cost-effective — a new thermocouple or heating element costs $100 to $250 installed and can restore full performance. But on older units, component failure is often just the beginning. When one part starts failing on a 10-year-old heater, others typically follow within months. Spending $200 on a repair only to need a $2,000 replacement six months later isn't a good investment.</p>

<h2>Visible Leaking Around the Base</h2>

<p>Any water pooling around the base of your water heater is a serious warning sign. Small amounts of moisture could be from the temperature and pressure (T&P) relief valve doing its job — that's normal. But water appearing consistently at the base of the tank means internal corrosion has created small fractures in the tank walls.</p>

<p>These fractures expand under the constant pressure of a full tank (40-50 gallons of water weighs over 300 pounds). What starts as a slow weep can become a sudden rupture, dumping the entire tank contents onto your floor.</p>

<p><strong>If you notice leaking around the base, turn off the gas supply (gas units) or circuit breaker (electric units) and close the cold water inlet valve on top of the heater immediately.</strong> Then call for a replacement — a leaking tank cannot be repaired.</p>

<h2>Rising Energy Bills</h2>

<p>Water heating accounts for roughly 18-20% of a typical home's energy costs. As sediment accumulates and components wear, your water heater runs longer and harder to produce the same amount of hot water. If your gas or electric bills have increased noticeably and you can't explain it by rate changes or seasonal usage, your water heater's declining efficiency may be the cause.</p>

<p>A new, properly sized water heater typically reduces water heating energy costs by 10-20% compared to an aging unit. Higher-efficiency models — including tankless units and heat pump water heaters — can reduce costs even further.</p>

<h2>Tank vs. Tankless: Which Is Right for Your East County Home?</h2>

<p>When it's time to replace, you have two main options:</p>

<p><strong>Tank water heaters</strong> cost less upfront — typically $1,200 to $2,500 fully installed, depending on capacity and efficiency rating. They're reliable, well-understood technology that works well for most households. The drawback is limited hot water supply (once the tank is empty, you wait 30-45 minutes for recovery) and a shorter lifespan (8-12 years).</p>

<p><strong>Tankless water heaters</strong> cost more upfront — typically $2,500 to $4,500 installed, including any gas line or venting modifications. They heat water on demand, so you never run out. They last 15-20 years, take up much less space, and use 24-34% less energy than tank heaters for homes that use under 41 gallons of hot water per day. For East County homes with hard water, tankless units need annual descaling to prevent mineral buildup in the heat exchanger — skip this maintenance and you'll shorten the unit's life and void most warranties.</p>

<p>As a general guideline: if your household uses under 40 gallons of hot water per day (1-3 people, one bathroom), a quality tank heater is usually the best value. For larger households or homes with multiple bathrooms running simultaneously, tankless offers better performance and long-term savings.</p>

<p><a href="/services/water-heater-services/">Learn more about our water heater services</a></p>

<p><strong>Not sure if your water heater needs repair or replacement? Call RD Hydrojet at <a href="tel:6195711777">(619) 571-1777</a> for a free inspection. We'll assess the unit's condition and give you honest options — repair when it makes sense, replace when it doesn't.</strong></p>
HTML;

	$post2_id = wp_insert_post(
		array(
			'post_title'   => 'How to Know When Your Water Heater Needs Replacing',
			'post_name'    => 'water-heater-replacement-guide',
			'post_content' => $post2_content,
			'post_excerpt' => 'Age, rusty water, strange noises, and leaking are signs your water heater is failing. Here\'s how to tell when it\'s time for a replacement.',
			'post_status'  => 'publish',
			'post_type'    => 'post',
			'post_date'    => '2026-03-22 09:00:00',
			'post_author'  => 1,
		)
	);

	if ( $post2_id && ! is_wp_error( $post2_id ) && isset( $category_ids['water-heaters'] ) ) {
		wp_set_post_categories( $post2_id, array( $category_ids['water-heaters'] ) );
	}

	// --- Post 3: Cast Iron Pipes ---
	$post3_content = <<<'HTML'
<p>Thousands of homes across East San Diego County were built with cast iron drain and sewer lines between the 1950s and 1970s. At the time, cast iron was the standard material for residential plumbing — durable, fire-resistant, and expected to last 50 to 75 years. That engineering estimate has held up reasonably well. The problem is simple arithmetic: pipes installed in 1965 are now over 60 years old. Many have reached or exceeded their designed lifespan, and the signs of deterioration are showing up in homes throughout El Cajon, La Mesa, San Carlos, and surrounding neighborhoods.</p>

<p>Understanding what's happening with your cast iron pipes — and knowing your options — puts you in a much better position than waiting for an emergency.</p>

<h2>Which East County Neighborhoods Have Cast Iron Pipes?</h2>

<p>If your home was built between roughly 1950 and 1975, there's a strong chance your drain and sewer lines are cast iron. The neighborhoods most likely to have cast iron plumbing include:</p>

<ul>
<li><strong>El Cajon</strong> — Downtown, the Main Street corridor, and the older residential neighborhoods north and south of Interstate 8</li>
<li><strong>La Mesa</strong> — The Village, the Spring Street area, and homes near University Avenue</li>
<li><strong>Lemon Grove</strong> — The Broadway corridor and Massachusetts Avenue neighborhoods</li>
<li><strong>San Carlos</strong> — Navajo Road, Lake Murray Boulevard, and the Golfcrest area</li>
<li><strong>East San Diego</strong> — City Heights, Oak Park, and Chollas View</li>
<li><strong>Spring Valley</strong> and parts of <strong>Santee</strong> — particularly the older developments near town centers</li>
</ul>

<p>If your home was built after 1975, your drain lines are most likely ABS or PVC plastic, which have a significantly longer expected lifespan (50-100+ years) and don't suffer from the same corrosion issues as cast iron.</p>

<p>Not sure what your home has? The build date is a strong indicator, but a sewer camera inspection gives you a definitive answer in about 30 minutes.</p>

<h2>Signs Your Cast Iron Pipes Are Failing</h2>

<p>Cast iron deterioration happens from the inside out, so you can't see the damage by looking at exposed pipes in your basement or crawl space. The exterior may look solid while the interior is heavily corroded. Here's what failing cast iron pipes typically produce at the fixture level:</p>

<ul>
<li><strong>Multiple slow drains</strong> — When several fixtures drain slowly at the same time, the mainline is restricted</li>
<li><strong>Sewage odors</strong> — Cracks and corrosion holes allow sewer gas to escape into your home or yard</li>
<li><strong>Gurgling sounds</strong> — Air entering through cracks in the pipe creates gurgling at fixtures when other drains are used</li>
<li><strong>Recurring backups</strong> — Multiple sewer backups per year indicate significant internal deterioration</li>
<li><strong>Sinkholes or soft spots in the yard</strong> — Leaking sewage erodes soil around the pipe, creating depressions at the surface</li>
<li><strong>Foundation cracks near drain lines</strong> — Leaking pipes beneath a slab foundation can undermine the soil supporting the foundation</li>
<li><strong>Water stains on slab floors</strong> — Under-slab sewer leaks can wick moisture up through concrete</li>
</ul>

<p>Any one of these signs warrants an inspection. Multiple signs occurring together strongly suggest your cast iron is reaching the end of its functional life.</p>

<h2>How We Inspect Cast Iron Pipes</h2>

<p>We insert a high-definition sewer camera through a cleanout access point and push it through the entire drain and sewer line, from your house to the street connection. The camera provides a real-time video feed that shows the exact condition of the pipe interior — and you watch the footage with us so you see exactly what we see.</p>

<p>The camera inspection reveals:</p>

<ul>
<li><strong>Scaling and corrosion</strong> — How much of the pipe wall has been eaten away by rust and mineral deposits</li>
<li><strong>Bellies</strong> — Low spots where the pipe has sagged, creating standing water that accelerates corrosion</li>
<li><strong>Root intrusion</strong> — Tree roots entering through cracked joints or corrosion holes</li>
<li><strong>Cracks and fractures</strong> — Structural failures that will worsen over time</li>
<li><strong>Collapses</strong> — Sections where the pipe has failed entirely and the soil has filled in</li>
</ul>

<p>After the inspection, we provide a written assessment that documents the pipe condition section by section, along with our recommendations. This gives you the information you need to make a decision — whether that's monitoring, targeted repair, or full replacement.</p>

<h2>Repair Options for Failing Cast Iron</h2>

<p>Not every failing cast iron pipe needs complete replacement. The right approach depends on the extent and location of the damage:</p>

<p><strong>Spot repair:</strong> If damage is limited to one section — a single crack, a localized area of corrosion, or a root intrusion point — we can cut out and replace just that segment (typically 4 to 8 feet) with modern ABS pipe. This is the most cost-effective option when the rest of the line is still in serviceable condition. It's a targeted fix that addresses the immediate problem without the cost of a full replacement.</p>

<p><strong>Trenchless pipe lining (CIPP):</strong> Cured-in-place pipe lining involves pulling a resin-coated flexible liner through the existing pipe, then inflating it against the pipe walls and curing it with heat or UV light. The result is essentially a new pipe inside the old one — smooth, joint-free, and resistant to roots and corrosion. The major advantage is that it requires minimal digging — usually just access at the cleanout and possibly one small excavation point. Trenchless lining works well when the pipe has consistent diameter throughout and no major collapses or offsets.</p>

<p><strong>Full replacement:</strong> When the line is extensively corroded, collapsed in multiple locations, or has significant bellies that can't be lined effectively, full replacement with modern ABS or PVC pipe is the most reliable long-term solution. This involves trenching along the sewer line route, removing the old cast iron, and installing new pipe. It's the most disruptive option but provides a completely new system with a 50+ year expected lifespan.</p>

<h2>What Does Cast Iron Replacement Cost?</h2>

<p>Costs vary based on the length of the line, depth of burial, access conditions, landscaping impact, and the repair method chosen:</p>

<ul>
<li><strong>Spot repair:</strong> $1,500 to $4,000 — depends on depth and location of the damaged section</li>
<li><strong>Trenchless lining (CIPP):</strong> $4,000 to $8,000 — depends on total line length and access</li>
<li><strong>Full replacement:</strong> $5,000 to $15,000 — depends on line length, depth, and whether the line runs under concrete, landscaping, or driveways</li>
</ul>

<p>We provide free camera inspections with a written condition assessment, so you can see the actual state of your pipes and understand all available options before committing to any work. There's no pressure and no obligation — the information is yours to use on your timeline.</p>

<h2>Don't Wait for a Collapse</h2>

<p>The worst-case scenario with aging cast iron is a complete sewer line collapse. When a section of pipe fails entirely, the soil around it fills in and creates a total blockage. Sewage backs up into your home through the lowest fixtures — floor drains, toilets, showers. The resulting damage can include contaminated flooring, damaged drywall, ruined personal property, and the health hazards associated with raw sewage exposure.</p>

<p>Emergency sewer replacement costs significantly more than planned replacement. You're paying premium rates for immediate service, and you don't have time to compare options or get multiple quotes. The disruption to your daily life is also more severe — you can't use any plumbing in your home until the line is repaired.</p>

<p>Regular camera inspections — every 2 to 3 years for cast iron sewer lines — catch deterioration early and give you time to plan and budget for repairs. A $200 inspection every few years is a small investment compared to a $15,000 emergency replacement.</p>

<p><a href="/services/drain-cleaning/">Drain and sewer repair services</a></p>
<p><a href="/services/hydro-jetting/">Hydro jetting for cast iron maintenance</a></p>
<p><a href="/plumber-in-el-cajon/">Plumber in El Cajon</a></p>
<p><a href="/plumber-in-la-mesa/">Plumber in La Mesa</a></p>
<p><a href="/plumber-in-lemon-grove/">Plumber in Lemon Grove</a></p>

<p><strong>Own an older East County home? Call RD Hydrojet at <a href="tel:6195711777">(619) 571-1777</a> for a free sewer camera inspection. We'll show you the exact condition of your pipes and give you honest options — no pressure, no surprises.</strong></p>
HTML;

	$post3_id = wp_insert_post(
		array(
			'post_title'   => 'What East San Diego Homeowners Should Know About Cast Iron Pipes',
			'post_name'    => 'cast-iron-pipes-east-san-diego',
			'post_content' => $post3_content,
			'post_excerpt' => 'Homes built in the 1950s-70s across El Cajon, La Mesa, and East San Diego often have cast iron sewer lines nearing the end of their lifespan. Here\'s what you need to know.',
			'post_status'  => 'publish',
			'post_type'    => 'post',
			'post_date'    => '2026-03-29 09:00:00',
			'post_author'  => 1,
		)
	);

	if ( $post3_id && ! is_wp_error( $post3_id ) && isset( $category_ids['sewer-drain'] ) ) {
		wp_set_post_categories( $post3_id, array( $category_ids['sewer-drain'] ) );
	}

	// Set flag so this only runs once.
	update_option( 'bmg_starter_posts_created', true );
}
add_action( 'init', 'bmg_create_starter_posts' );
