<?php
/**
 * Template Name: Service Detail
 *
 * Shared template for all 9 service detail pages. Content is keyed
 * by $post->post_name (page slug). Create a WordPress page for each
 * slug and assign this template under Page Attributes.
 *
 * Slugs: hydro-jetting, drain-cleaning, water-heater-services,
 *        leak-detection, gas-line-repair, toilet-repair,
 *        emergency-plumbing, repiping, septic-sanitation
 *
 * @package bmg-theme
 */

defined( 'ABSPATH' ) || exit;

$phone_display = get_theme_mod( 'bmg_phone', '(951) 600-0459' );
$phone_link    = preg_replace( '/[^0-9+]/', '', $phone_display );
$email         = get_theme_mod( 'bmg_email', 'info@rdhydrojeteast.com' );

// =========================================================================
// Service content — keyed by page slug
// =========================================================================
$services = array(

	'hydro-jetting' => array(
		'title'       => 'Hydro Jetting in East San Diego County',
		'subtitle'    => 'Commercial-grade, high-pressure drain cleaning for residential and commercial properties across El Cajon, La Mesa, Santee, and East County.',
		'description' => '<p>Hydro jetting is the most effective way to clean a drain or sewer line completely. Unlike a mechanical snake, which punches a hole through a clog, hydro jetting scours the entire pipe wall with pressurized water — removing grease, scale, roots, and decades of buildup in a single service.</p>
<p>Many East San Diego homes were built in the 1960s–80s with cast iron or clay sewer lines. Over time, these pipes collect grease, mineral scale, and root intrusions that a standard snaking can\'t fully clear. Recurring clogs are the telltale sign. If you\'ve had a plumber out three times for the same drain, hydro jetting is usually the real fix.</p>
<p>Every hydro jetting job starts with a camera inspection. We need to see the pipe condition before introducing high-pressure water — no exceptions. That lets us confirm the pipe can safely handle jetting, identify any structural issues that need repair instead, and document the before/after state. You see the footage too.</p>',
		'includes'    => array(
			array( 'title' => 'Camera Inspection',          'desc' => 'High-definition sewer camera run through the line to identify clogs, root intrusions, and pipe condition before any jetting begins.' ),
			array( 'title' => 'High-Pressure Jetting',      'desc' => 'Commercial-grade jetter delivering up to 4,000 PSI through specialized nozzles matched to your pipe size and material.' ),
			array( 'title' => 'Full Line Cleaning',         'desc' => 'Complete pipe-wall scour from cleanout to main — removing grease, scale, roots, and organic buildup that snaking misses.' ),
			array( 'title' => 'Post-Service Verification',  'desc' => 'Second camera pass to confirm the line is fully clear and document the result. You get to see the before and after.' ),
		),
		'why'         => "East County homes — especially in older neighborhoods across El Cajon, La Mesa, Spring Valley, and Lemon Grove — often have cast iron or clay sewer lines installed decades ago. These pipes collect grease, mineral buildup, and tree roots that recurrent snaking can't fully clear. Hydro jetting is the long-term fix: a clean pipe wall lasts years, not weeks. It's also the industry standard for restaurants, apartment buildings, and commercial properties where drain failures cost real money.",
		'faqs'        => array(
			array( 'q' => 'Is hydro jetting safe for older pipes?',                       'a' => 'In most cases, yes — but only when a camera inspection is done first. We check the pipe condition before jetting. If the line is fractured, severely corroded, or otherwise compromised, we recommend repair instead of jetting.' ),
			array( 'q' => 'How often should hydro jetting be done?',                       'a' => 'For homes with recurring issues, every 2–3 years is typical. Commercial kitchens and properties with known grease buildup benefit from annual service. A clean line assessed by camera can go much longer.' ),
			array( 'q' => 'How much does hydro jetting cost in East San Diego?',           'a' => 'Pricing varies by line length, accessibility, and pipe condition. We provide a written estimate after the camera inspection — before any work begins. No hidden fees.' ),
			array( 'q' => 'How is hydro jetting different from snaking?',                  'a' => 'Snaking punches a hole through a clog. Hydro jetting clears the entire pipe wall. Snaking is faster and cheaper for one-off blockages; jetting delivers a long-term result for recurring issues, grease, and root intrusions.' ),
			array( 'q' => 'How long does a typical hydro jetting service take?',          'a' => 'Most residential jobs run 1–3 hours, including camera inspection, jetting, and verification. Larger commercial lines can take longer. We give you an accurate time estimate after the initial inspection.' ),
			array( 'q' => 'Do you service commercial properties?',                         'a' => 'Yes. We hydro jet restaurants, apartment complexes, retail centers, and light commercial buildings across East San Diego County. Our equipment handles residential laterals and commercial mains equally well.' ),
		),
	),

	'drain-cleaning' => array(
		'title'       => 'Drain &amp; Sewer Repair in East San Diego County',
		'subtitle'    => 'From slow drains to full sewer line failures — camera-guided diagnosis and lasting repairs across East County.',
		'description' => '<p>Every drain and sewer problem is different. A slow kitchen drain is not the same as a backed-up main line, and a tree root intrusion is not the same as a cracked cast iron sewer. We diagnose before we quote — always — using a sewer camera to see exactly what\'s happening inside your pipes.</p>
<p>Many East San Diego homes built in the 1960s–80s have original cast iron or clay sewer lines. These materials have a predictable failure pattern: they corrode from the inside, develop hairline fractures, collect root intrusions at joints, and eventually collapse. We see it every week. The good news is that modern trenchless repair methods let us fix many of these issues without excavating the entire yard.</p>
<p>From simple drain snaking to full sewer line replacement, we use the least invasive method that solves the problem. If trenchless pipe lining will work, we recommend it. If full excavation is necessary, we explain why and keep the work area as tight as possible. You always see the camera footage and the written estimate before we start.</p>',
		'includes'    => array(
			array( 'title' => 'Video Camera Inspection',    'desc' => 'HD sewer camera run through your cleanout to pinpoint the exact location, type, and severity of the problem.' ),
			array( 'title' => 'Trenchless Repair Options',  'desc' => 'Pipe lining and pipe bursting when applicable — restore your sewer line without digging up the yard.' ),
			array( 'title' => 'Full Line Replacement',      'desc' => 'When trenchless isn\'t viable, we excavate efficiently, replace with modern PVC or ABS, and restore the work area.' ),
			array( 'title' => 'Root Intrusion Removal',     'desc' => 'Mechanical root removal plus chemical treatment to slow regrowth, followed by camera verification.' ),
		),
		'why'         => "East San Diego neighborhoods like El Cajon, La Mesa, and Lemon Grove are full of homes built when cast iron and clay sewer lines were the standard. These materials have a 50–80 year lifespan, and many local homes are now at or past that threshold. The signs — recurring clogs, slow drains, sewer odors in the yard, patches of unusually green lawn — all point to the same thing. Early diagnosis with a camera lets you decide whether a targeted repair or full replacement is the right move. Ignoring it turns into a septic backup emergency.",
		'faqs'        => array(
			array( 'q' => 'What causes a sewer line to fail?',                              'a' => 'Age, material, tree roots, ground shift, and grease buildup are the most common causes. Cast iron corrodes from the inside out. Clay pipes crack and shift over time. Both collect roots at the joints. A camera inspection pinpoints the exact cause.' ),
			array( 'q' => 'What is trenchless sewer repair?',                               'a' => 'Trenchless repair replaces or restores a sewer line without digging up the full length. Pipe lining creates a new pipe inside the existing one. Pipe bursting breaks the old pipe while pulling a new one through. Both minimize yard damage and repair time.' ),
			array( 'q' => 'How do I know if I need drain cleaning or sewer repair?',        'a' => 'Multiple drains backing up at once points to a main line issue. A single slow drain is usually local. Recurring clogs in the same drain suggest buildup or a root intrusion that snaking won\'t fully fix. We run a camera first to confirm.' ),
			array( 'q' => 'Do you offer emergency drain service?',                          'a' => 'Yes. Sewer backups are urgent — they can damage floors, walls, and personal belongings within hours. We offer 24/7 emergency response across El Cajon, La Mesa, Santee, and surrounding East County communities.' ),
			array( 'q' => 'How long does a full sewer line replacement take?',              'a' => 'A typical residential replacement runs 1–3 days, depending on line length, accessibility, and whether trenchless methods are viable. We give you a firm timeline after the camera inspection and scope confirmation.' ),
			array( 'q' => 'Will my insurance cover sewer line repair?',                     'a' => "Most standard homeowners policies don't cover sewer line repair by default, but many offer service line endorsements. If you submit an insurance claim, we provide detailed camera footage and written documentation to support it." ),
		),
	),

	'water-heater-services' => array(
		'title'       => 'Water Heater Services in East San Diego County',
		'subtitle'    => 'Tank and tankless water heater installation, repair, and replacement. All major brands.',
		'description' => '<p>A water heater is one of the most important appliances in your home — and one of the most likely to fail at the worst possible time. When yours stops working, you need a plumber who can diagnose fast, explain the repair-or-replace tradeoff honestly, and get hot water back the same day.</p>
<p>We service and install every major type of water heater: traditional tank heaters (gas and electric), tankless units, hybrid heat-pump systems, and direct-vent/power-vent configurations. We work with all major brands — Rheem, A.O. Smith, Bradford White, Rinnai, Navien, and more. Whether you\'re replacing a failed tank or upgrading to tankless, we give you honest guidance on what makes sense for your home.</p>
<p>East San Diego has hard water, and hard water shortens water heater lifespan. Sediment buildup in the tank reduces efficiency, overworks the heating element, and eventually causes the tank to fail prematurely. We offer preventive flushing and anode rod replacement to extend the life of your existing unit, and we can recommend water conditioning to address the underlying issue.</p>',
		'includes'    => array(
			array( 'title' => 'Diagnostics &amp; Repair',       'desc' => 'Thermostat failures, heating element replacement, pilot light issues, gas valve problems, and leak repair.' ),
			array( 'title' => 'Tank Water Heaters',             'desc' => 'Same-day replacement on most common sizes. Gas, electric, and direct-vent configurations.' ),
			array( 'title' => 'Tankless Installation',          'desc' => 'Whole-home tankless conversions — endless hot water, lower energy bills, and decades of service life.' ),
			array( 'title' => 'Energy-Efficient Upgrades',      'desc' => 'Heat pump hybrid systems, high-efficiency tank replacements, and rebates for qualifying installations.' ),
		),
		'why'         => "Water heaters don't last forever. Most tank units give 8–12 years in East San Diego's hard water — sometimes less if they've never been flushed. The warning signs are predictable: rumbling or popping noises from sediment buildup, slowly decreasing hot water, rust-colored water from the hot tap, and visible moisture around the base. Catching these signs early lets you plan a replacement on your schedule instead of dealing with an emergency when the tank finally lets go and floods your garage.",
		'faqs'        => array(
			array( 'q' => 'Should I repair or replace my water heater?',                    'a' => 'If your unit is under 8 years old and has a single fixable issue, repair is usually the right call. If it\'s over 10 years, has multiple problems, or is showing signs of tank failure, replacement is more economical long-term. We give you an honest recommendation after diagnosis.' ),
			array( 'q' => 'How long does a water heater replacement take?',                 'a' => 'A standard tank-to-tank swap typically runs 2–4 hours. Tankless installation is more involved — 4–8 hours depending on gas and venting requirements. Most replacements are same-day service if we have the unit in stock.' ),
			array( 'q' => 'Is tankless worth it?',                                          'a' => 'For most homes, yes — if you plan to stay 5+ years. Tankless units last 20+ years (vs 10–12 for tanks), provide endless hot water, and cut water-heating energy costs by 25–35%. The upfront cost is higher but the long-term value is strong.' ),
			array( 'q' => 'Do you handle permits and inspections?',                         'a' => 'Yes. Every water heater replacement we perform is code-compliant and permitted where required. We coordinate with the local building department for inspection and handle all paperwork.' ),
			array( 'q' => 'What size water heater do I need?',                              'a' => 'Tank sizing depends on household size and peak usage. A 40-gallon tank typically serves 2–3 people; 50-gallon serves 3–4; larger households need 75+ gallons or a tankless system. For tankless, we size based on flow rate (GPM) needed.' ),
			array( 'q' => 'Do you offer emergency water heater replacement?',               'a' => 'Yes. Failed water heaters are urgent — especially when flooding is involved. We offer same-day and emergency replacement service across East San Diego County.' ),
		),
	),

	'leak-detection' => array(
		'title'       => 'Leak Detection in East San Diego County',
		'subtitle'    => 'Electronic and thermal leak detection for slab leaks, hidden pipe leaks, and gas leaks.',
		'description' => '<p>Hidden leaks cause more damage the longer they go undetected. A slab leak under your foundation can destroy flooring, warp subfloor, grow mold, and drive your water bill up hundreds of dollars a month — all before you see a single visible drop of water. Early detection is everything.</p>
<p>We use electronic acoustic detection, thermal imaging, pressure testing, and tracer gas methods to find leaks without tearing up walls or floors. Most detection jobs are fully non-invasive — we locate the leak first, then repair with the least disruption possible. You get a detailed report documenting the leak location, estimated damage, and recommended repair approach.</p>
<p>If you\'re filing an insurance claim, we provide the documentation you need: photos, moisture readings, diagnostic findings, and a written estimate. Many East San Diego homeowners find out about slab leaks when their water bill spikes or they notice warm spots on the floor. We investigate fast and get you answers before the damage spreads.</p>',
		'includes'    => array(
			array( 'title' => 'Electronic Detection',        'desc' => 'Acoustic listening equipment locates the exact sound of water escaping under concrete or behind walls.' ),
			array( 'title' => 'Thermal Imaging',             'desc' => 'Infrared cameras identify temperature differences that reveal hot water slab leaks and hidden moisture.' ),
			array( 'title' => 'Slab Leak Location',          'desc' => 'Specialized equipment pinpoints slab leaks to within inches — minimizing the repair footprint.' ),
			array( 'title' => 'Detailed Reporting',          'desc' => 'Written report with photos, leak location, and repair recommendations — ready for insurance claims.' ),
		),
		'why'         => "East San Diego has clay soils, aging copper supply lines, and — in many older neighborhoods — slab foundations with pipes embedded in concrete. The combination means slab leaks are a very real risk, especially in homes built between 1960 and 1985. A single pinhole leak can waste hundreds of gallons a day. By the time you see water or smell mildew, the damage is already extensive. Investigating early signs — unexplained water bill increases, warm spots on tile floors, sounds of running water when everything is off — saves thousands in repair costs.",
		'faqs'        => array(
			array( 'q' => 'What are the signs of a slab leak?',                             'a' => 'Unexplained water bill increases, warm spots on tile or laminate floors, sounds of running water when all fixtures are off, damp carpet for no apparent reason, and visible cracks in flooring or walls can all indicate a slab leak.' ),
			array( 'q' => 'Is leak detection invasive?',                                    'a' => 'No. Electronic and thermal detection are non-invasive — we locate the leak without tearing up walls or floors. Only the actual repair requires controlled access, and we keep that to the smallest possible area.' ),
			array( 'q' => 'How accurate is electronic leak detection?',                     'a' => 'Very. Acoustic detection typically locates leaks within a few inches. Thermal imaging adds confirmation. Combined, we can pinpoint most leaks without any exploratory demolition.' ),
			array( 'q' => 'Can you detect gas leaks?',                                      'a' => 'Yes. We use combustible gas detectors and soap testing for gas line leaks. If you smell gas, leave the property and call us immediately — gas leak detection is an emergency service.' ),
			array( 'q' => 'Will my homeowners insurance cover a slab leak?',                'a' => 'Most policies cover the water damage from a sudden slab leak but not always the leak repair itself. We provide documentation — photos, moisture readings, and written reports — to support your claim. Policy coverage varies.' ),
			array( 'q' => 'How much does leak detection cost?',                             'a' => 'Standard residential leak detection starts with a flat diagnostic fee. We provide a written estimate before starting, and the detection fee is often waived or applied to the repair if you proceed with us.' ),
		),
	),

	'gas-line-repair' => array(
		'title'       => 'Gas Line Installation &amp; Repair in East San Diego County',
		'subtitle'    => 'Certified gas plumbers for safe, code-compliant gas line work across East County.',
		'description' => '<p>Gas line work is not a DIY project and it\'s not a job for an unlicensed plumber. California requires a licensed contractor for all gas line installation, modification, and repair — and for good reason. An improperly installed or repaired gas line is a fire and explosion hazard. We carry a C-36 Plumbing license and handle gas work every day, from simple appliance hookups to full new installations.</p>
<p>We install gas lines for new appliances (water heaters, stoves, dryers, outdoor kitchens, fire pits, pool heaters), repair damaged or leaking lines, replace aging black iron or galvanized gas piping, and perform pressure testing and code-compliance inspections for real estate transactions. All work is permitted where required and passes local inspection.</p>
<p>If you smell gas, leave the property immediately and call us or the gas utility from a safe location. Gas leaks are emergencies — we respond fast. If the leak is suspected but not confirmed, we run a pressure test and combustible gas detection to locate it precisely.</p>',
		'includes'    => array(
			array( 'title' => 'New Line Installation',       'desc' => 'New gas runs for appliances, outdoor kitchens, pool heaters, and fire features — properly sized and code-compliant.' ),
			array( 'title' => 'Leak Repair &amp; Testing',   'desc' => 'Pressure testing, combustible gas detection, and leak repair on existing lines. We locate and fix leaks fast.' ),
			array( 'title' => 'Appliance Hookups',           'desc' => 'Water heaters, stoves, dryers, tankless units, and outdoor appliances — connected safely and correctly.' ),
			array( 'title' => 'Code Compliance Inspection',  'desc' => 'Real estate, insurance, or permit inspections. Written reports documenting condition and code status.' ),
		),
		'why'         => "Gas lines don't fail often, but when they do, the stakes are life and property. Older East San Diego homes — particularly those with black iron or galvanized gas piping — can develop leaks at fittings as the sealants age. Newer homes with CSST (corrugated stainless steel tubing) require specific grounding and bonding to code. Either way, gas work isn't guesswork. Certification, testing, and permitting exist because the alternative is catastrophic failure. Call a licensed contractor. Every single time.",
		'faqs'        => array(
			array( 'q' => 'What should I do if I smell gas?',                               'a' => 'Leave the property immediately, don\'t use any electrical switches or phones inside, and call 911 or the gas utility from a safe location. Once the area is safe, call us to locate and repair the leak.' ),
			array( 'q' => 'Do I need a permit for gas line work?',                          'a' => "Most gas line work in California requires a permit. We pull permits for all work that requires them and coordinate inspection with your local building department. Permits protect you and ensure the work is done to code." ),
			array( 'q' => 'Can you install a gas line for an outdoor kitchen or fire pit?', 'a' => 'Yes. Outdoor gas runs for BBQs, fire pits, patio heaters, and pool heaters are a common project. We handle routing, sizing, and permit coordination.' ),
			array( 'q' => 'What is CSST and is it safe?',                                   'a' => 'CSST (corrugated stainless steel tubing) is a flexible gas line material common in newer homes. It\'s safe when installed correctly, but requires specific bonding and grounding to protect against lightning-induced damage. We inspect and upgrade CSST installations when needed.' ),
			array( 'q' => 'How long does a gas line installation take?',                    'a' => 'A simple appliance hookup runs a few hours. A new run from the meter to an appliance can take a full day. Full-home repiping or major modifications can take 2–3 days. We give you a firm timeline after the initial site visit.' ),
			array( 'q' => 'Are you licensed for gas work?',                                 'a' => 'Yes. We hold a C-36 Plumbing license (CA CSLB #1076642), which covers all residential and commercial gas line work in California. Our technicians are experienced in gas piping, leak detection, and code compliance.' ),
		),
	),

	'toilet-repair' => array(
		'title'       => 'Toilet Repair &amp; Installation in East San Diego County',
		'subtitle'    => 'Running toilets, broken flanges, full replacements — fast, clean work with no mess.',
		'description' => '<p>Toilets seem simple until they stop working. A running toilet can waste hundreds of gallons a day. A wobbly toilet usually means a failed wax seal — and ignoring it leads to water damage under the floor. A cracked tank or a leaking supply line needs immediate attention. We handle every toilet repair and installation fast, cleanly, and without leaving a mess behind.</p>
<p>Most toilet repairs are small jobs: flapper replacement, fill valve swap, flush handle, supply line, or wax ring. We carry common parts on the truck so most repairs are same-visit. For older toilets that keep breaking, we\'ll show you the replacement options — modern low-flow models use less than half the water of pre-1994 units, and the water savings typically pay for the replacement within a few years.</p>
<p>Full toilet installation includes flange inspection, new wax seal, proper bolting, level check, and leak test. We also haul the old toilet away — no disposal headache on your end.</p>',
		'includes'    => array(
			array( 'title' => 'Leak &amp; Running Toilet Repair',  'desc' => 'Flapper, fill valve, flush valve, and supply line repairs. Most fixes are same-visit with parts on the truck.' ),
			array( 'title' => 'Full Toilet Replacement',           'desc' => 'Removal, haul-away, new flange if needed, and installation of your chosen replacement unit. Clean, complete job.' ),
			array( 'title' => 'Flange &amp; Wax Seal Repair',      'desc' => 'Wobbly toilets and hidden leaks usually trace to a failed flange or wax seal. We fix the root cause, not the symptom.' ),
			array( 'title' => 'Water-Saving Upgrades',             'desc' => 'Low-flow and dual-flush models that cut water usage and may qualify for SDG&amp;E or water district rebates.' ),
		),
		'why'         => "A single running toilet can waste 200+ gallons of water per day — that's over $15 a month on your water bill, every month, until it's fixed. A failed wax seal leaks gray water under the flooring every flush, rotting the subfloor until eventually the toilet falls through. These are both easy, inexpensive fixes if caught early. Ignored, they turn into major repair projects. If your toilet runs, wobbles, or leaks, call us — it's usually fast and cheap to fix.",
		'faqs'        => array(
			array( 'q' => 'Why does my toilet keep running?',                               'a' => 'Almost always a worn flapper or a misadjusted fill valve. Both are cheap and fast to replace. If the toilet still runs after those repairs, the flush valve or the overflow tube may be the issue.' ),
			array( 'q' => 'My toilet wobbles. Is that a big deal?',                         'a' => 'Yes. A wobbly toilet means the wax seal is compromised, which lets every flush leak water under the flooring. Left alone, this rots the subfloor and causes major damage. It\'s an easy fix if caught early.' ),
			array( 'q' => 'Should I repair or replace my toilet?',                          'a' => 'If your toilet is under 10 years old and has a single fixable issue, repair is the answer. If it\'s a pre-1994 model or has chronic problems, replacement usually makes sense — newer low-flow toilets use less than half the water.' ),
			array( 'q' => 'How long does a toilet installation take?',                      'a' => 'A standard replacement takes about an hour, including the haul-away of the old unit. If the flange is damaged and needs replacement, add another hour or two for repair.' ),
			array( 'q' => 'Do you haul away the old toilet?',                               'a' => 'Yes. Removal and disposal are included in our toilet replacement service. You don\'t have to deal with getting rid of it.' ),
			array( 'q' => 'Do low-flow toilets actually flush well?',                       'a' => 'Modern low-flow toilets (post-2010) flush much better than the early ones. We can recommend models with strong flush performance — they use 1.28 gallons per flush and still clear everything in one pull.' ),
		),
	),

	'emergency-plumbing' => array(
		'title'       => '24/7 Emergency Plumber in East San Diego County',
		'subtitle'    => 'Burst pipes, sewer backups, gas leaks, water heater failures — we answer the phone day and night.',
		'description' => '<p>Plumbing emergencies don\'t wait for business hours. A burst pipe at 2 AM, a sewer backup during a dinner party, a gas leak on a holiday weekend — when something goes seriously wrong, you need a plumber who answers the phone and shows up fast. We offer 24/7 emergency service across all of East San Diego County: El Cajon, La Mesa, Santee, Lakeside, Spring Valley, Lemon Grove, Rancho San Diego, Alpine, and surrounding communities.</p>
<p>Our emergency response goal is under 60 minutes to your door in most parts of East County. We carry common repair parts on every truck — shut-off valves, common fittings, wax seals, flappers, pressure tanks — so most emergencies can be resolved in a single visit. For major issues like full sewer line failures or whole-home flooding, we triage on-site and give you a clear plan.</p>
<p>If you\'re calling us in an emergency: stay calm, shut off the main water valve if water is involved, turn off the gas at the meter if gas is involved, and call us at (951) 600-0459. We\'ll talk you through what to do while we\'re en route.</p>',
		'includes'    => array(
			array( 'title' => 'Immediate Phone Response',    'desc' => '24/7 live answering. No voicemail, no call queue. You reach a real person who dispatches the nearest technician.' ),
			array( 'title' => 'Rapid On-Site Arrival',       'desc' => '60-minute response goal across most of East County. Faster in our primary coverage zone.' ),
			array( 'title' => 'Emergency Diagnostics',       'desc' => 'Fast, accurate diagnosis on-site with the tools and experience to identify problems that aren\'t obvious.' ),
			array( 'title' => 'Same-Visit Repair',           'desc' => 'Trucks stocked with common parts. Most emergencies can be fully resolved in a single visit without a return trip.' ),
		),
		'why'         => "A plumbing emergency gets worse every hour it goes unaddressed. A slow drain becomes a sewer backup. A small leak becomes a flooded garage. A water heater drip becomes a burst tank. Having a plumber who answers the phone — and actually shows up — is the difference between a manageable repair and a major insurance claim. We've been running 24/7 emergency service across East San Diego for years because that's when homeowners need us most.",
		'faqs'        => array(
			array( 'q' => 'What counts as a plumbing emergency?',                           'a' => 'Anything causing immediate damage or safety risk: burst or leaking pipes, sewer backups, gas leaks, water heater failures flooding a space, no hot water in winter, or a toilet that won\'t stop overflowing. When in doubt, call.' ),
			array( 'q' => 'How fast can you get here?',                                     'a' => 'Our goal is under 60 minutes to most of East San Diego County. Faster in our primary coverage area. We dispatch the closest available technician and confirm ETA when you call.' ),
			array( 'q' => 'What should I do while waiting for the plumber?',                'a' => 'If it\'s a water leak, shut off the main water valve (usually outside or in the garage). If it\'s a gas leak, leave the property and call from a safe location. For sewer backups, don\'t use any drains or toilets. We\'ll advise specific steps when you call.' ),
			array( 'q' => 'Do you charge more for after-hours service?',                    'a' => 'There is a modest after-hours service fee, but we\'re transparent about it upfront — no surprise charges. We\'ll tell you exactly what the call costs before we dispatch.' ),
			array( 'q' => 'What areas do you cover for emergency service?',                 'a' => 'All of East San Diego County — El Cajon, La Mesa, Santee, Lakeside, Spring Valley, Lemon Grove, Rancho San Diego, Alpine, San Carlos, Del Cerro, College Area, and surrounding communities.' ),
			array( 'q' => 'Do you offer emergency service on holidays?',                    'a' => 'Yes. Emergencies don\'t take holidays off, and neither do we. Same-day response across East County 365 days a year.' ),
		),
	),

	'repiping' => array(
		'title'       => 'Whole-Home Repiping in East San Diego County',
		'subtitle'    => 'Replace aging galvanized and polybutylene pipes with modern copper or PEX systems.',
		'description' => '<p>If your home has aging galvanized or polybutylene water supply pipes, a whole-home repipe is the single best investment you can make in your plumbing. These older materials corrode, fail, and leak in ways that constant repair never fully solves. A modern copper or PEX repipe restores full water pressure, eliminates rust-colored water, and protects your home from catastrophic leaks for decades.</p>
<p>Signs your home needs a repipe: low water pressure that keeps getting worse, rust-colored water from the hot or cold tap, frequent pinhole leaks, stained fixtures or laundry, or simply the age of your plumbing. Homes built before 1975 often still have original galvanized supply. Homes built between 1978 and 1995 may have polybutylene — a material so prone to failure that it\'s the subject of class-action settlements.</p>
<p>Our repipe process minimizes wall damage. We plan the new pipe routing to use existing access points where possible, cut drywall only where necessary, and handle all patching and texture matching after the work is done. Most single-family homes can be repiped in 2–4 days. You keep your furniture in place, you keep using bathrooms on alternating days during the work, and we test everything under pressure before we finish.</p>',
		'includes'    => array(
			array( 'title' => 'Full System Assessment',      'desc' => 'Complete evaluation of your existing pipes, fixtures, and routing. We identify what needs replacing and what can stay.' ),
			array( 'title' => 'Copper &amp; PEX Options',    'desc' => 'Type L copper for traditional durability or PEX-A for flexibility and cost. We\'ll recommend what fits your home and budget.' ),
			array( 'title' => 'Minimal Wall Access',         'desc' => 'Strategic routing minimizes drywall cuts. We patch and texture-match every access point so the repairs are invisible.' ),
			array( 'title' => 'Pressure Testing &amp; Verification', 'desc' => 'Full system pressure test after install, fixture-by-fixture flow check, and code inspection coordination.' ),
		),
		'why'         => "A significant portion of East San Diego's housing stock was built between 1950 and 1985 — the era when galvanized and, later, polybutylene were the standard materials. Both are now known to fail as they age. Galvanized pipes corrode from the inside out, restricting flow and eventually leaking. Polybutylene literally breaks down on contact with chlorinated water. If your home has either, repiping isn't a question of if — it's when. Planning it on your schedule is much cheaper than an emergency repipe after a major leak.",
		'faqs'        => array(
			array( 'q' => 'How do I know if I need a repipe?',                               'a' => 'Rust-colored water, slowly decreasing water pressure, frequent pinhole leaks, or visible corrosion on exposed pipes are strong indicators. If your home was built before 1985, it\'s worth an inspection regardless.' ),
			array( 'q' => 'Copper or PEX — which is better?',                                'a' => 'Both are excellent. Copper is proven, durable, and fire-resistant. PEX is faster to install, less expensive, and handles freeze expansion better. For most East San Diego homes, PEX-A is our typical recommendation — but we\'ll walk you through both options.' ),
			array( 'q' => 'How long does a whole-home repipe take?',                         'a' => 'Most single-family homes complete in 2–4 days of active work. Larger or more complex homes can take up to a week. We stage the work to keep at least one bathroom functional throughout.' ),
			array( 'q' => 'Will you cut holes in my walls?',                                 'a' => 'Yes, but minimally. We plan routing to use existing access points wherever possible. All access holes are patched, textured, and primed after the work — we do our own drywall repair so the finish matches.' ),
			array( 'q' => 'How much does a repipe cost?',                                    'a' => 'Cost depends on home size, material choice, number of fixtures, and access complexity. Most residential repipes fall in a predictable range — we provide a firm written estimate after an in-home assessment.' ),
			array( 'q' => 'Do I need a permit for a repipe?',                                'a' => 'Yes, and we pull it. All repipe work is permitted and inspected by the local building department. We handle every step of the permit and inspection process.' ),
		),
	),

	'septic-sanitation' => array(
		'title'       => 'Septic &amp; Sanitation Services in East San Diego County',
		'subtitle'    => 'C42 licensed septic system inspections, repairs, and installations for East County homes and properties.',
		'description' => "<p>RD Hydrojet is a C-42 licensed sanitation contractor — a credential most plumbers don't carry. We handle septic inspections, diagnostics, tank pumping coordination, leach field assessment, system repairs, and complete septic system replacements.</p>
<p>Many properties in Lakeside, Alpine, and rural East County rely on septic systems, and proper maintenance prevents costly failures and environmental hazards. Whether you're dealing with a slow drain that points to septic issues, a suspected leach field failure, or need a pre-purchase septic inspection, our team responds fast with code-compliant solutions.</p>
<p>Septic systems need periodic attention — typically pumping every 3–5 years, inspection every 3 years, and system-level assessment when problems appear. Ignoring a failing septic system leads to tank backups, contaminated leach fields, and environmental violations. We work with residential homeowners, property managers, and real estate transactions to keep septic systems compliant and functional.</p>",
		'includes'    => array(
			array( 'title' => 'Septic System Inspection',    'desc' => 'Comprehensive tank, baffle, and leach field inspection. Written report suitable for real estate transactions or insurance.' ),
			array( 'title' => 'Diagnostic &amp; Troubleshooting', 'desc' => 'Identify causes of slow drains, backups, and odor issues. Pinpoint whether the issue is the tank, the baffles, or the leach field.' ),
			array( 'title' => 'Repair &amp; Replacement',    'desc' => 'From baffle repairs and effluent filter replacement to full tank and leach field replacement — permitted and inspected.' ),
			array( 'title' => 'Leach Field Assessment',      'desc' => 'Evaluate leach field saturation, drainage, and lifespan. Recommend restoration or replacement based on condition.' ),
		),
		'why'         => "A lot of East County — especially Lakeside, Alpine, and unincorporated areas — is on septic. A failing septic system is an expensive and hazardous problem, and most plumbers aren't licensed to work on them. The C-42 Sanitation license is specifically required for septic system work in California, and very few contractors hold it. We do. Whether you need a routine inspection before a property sale or an emergency response to a tank backup, we're the right call for septic and sanitation needs across East San Diego County.",
		'faqs'        => array(
			array( 'q' => 'What does a septic inspection include?',                         'a' => 'We check the tank levels, inspect the inlet and outlet baffles, assess the leach field condition, and test the system\'s flow. We provide a written report of findings.' ),
			array( 'q' => 'How often should a septic system be pumped?',                    'a' => 'Most residential systems should be pumped every 3–5 years, depending on household size and usage. We can assess your system and recommend a schedule.' ),
			array( 'q' => 'What are signs of septic system failure?',                       'a' => 'Slow drains throughout the house, sewage odors in the yard, wet spots over the leach field, and gurgling sounds in plumbing are all warning signs.' ),
			array( 'q' => 'Do you handle septic emergencies?',                              'a' => 'Yes. Septic backups and overflows are urgent situations. We provide emergency response for septic failures across East San Diego County.' ),
			array( 'q' => 'Are you licensed for septic work?',                              'a' => 'Yes. We hold a C-42 Sanitation System license (CA CSLB #1076642), which specifically covers septic and sanitation system work. Many plumbers only carry a C-36.' ),
			array( 'q' => 'Do you install new septic systems?',                             'a' => 'Yes. We design and install new septic systems for residential and light commercial properties, including all permitting and county inspection coordination.' ),
		),
	),

);

// Resolve the current slug.
$slug = isset( $post->post_name ) ? $post->post_name : '';

if ( ! isset( $services[ $slug ] ) ) {
	// If someone assigns this template to an unrelated page, fall back to the services hub.
	wp_safe_redirect( home_url( '/services/' ) );
	exit;
}

$service = $services[ $slug ];

get_header();
?>

<!-- Service Schema -->
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "Service",
	"@id": "<?php echo esc_url( get_permalink() ); ?>#service",
	"name": "<?php echo esc_js( wp_strip_all_tags( html_entity_decode( $service['title'] ) ) ); ?>",
	"description": "<?php echo esc_js( wp_strip_all_tags( html_entity_decode( $service['subtitle'] ) ) ); ?>",
	"url": "<?php echo esc_url( get_permalink() ); ?>",
	"provider": {
		"@type": "LocalBusiness",
		"@id": "<?php echo esc_url( home_url( '/' ) ); ?>#business",
		"name": "RD Hydrojet Plumbing & Drain Inc.",
		"telephone": "<?php echo esc_attr( $phone_display ); ?>",
		"email": "<?php echo esc_attr( $email ); ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "East San Diego County",
			"addressRegion": "CA",
			"addressCountry": "US"
		}
	},
	"areaServed": [
		{ "@type": "City", "name": "El Cajon" },
		{ "@type": "City", "name": "La Mesa" },
		{ "@type": "City", "name": "Santee" },
		{ "@type": "City", "name": "Lakeside" },
		{ "@type": "City", "name": "Spring Valley" },
		{ "@type": "City", "name": "Lemon Grove" },
		{ "@type": "City", "name": "Rancho San Diego" },
		{ "@type": "City", "name": "Alpine" }
	]
}
</script>

<!-- FAQPage Schema -->
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "FAQPage",
	"mainEntity": [
		<?php
		$schema_faqs = array();
		foreach ( $service['faqs'] as $faq ) {
			$schema_faqs[] = sprintf(
				'{
					"@type": "Question",
					"name": "%s",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "%s"
					}
				}',
				esc_js( wp_strip_all_tags( html_entity_decode( $faq['q'] ) ) ),
				esc_js( wp_strip_all_tags( html_entity_decode( $faq['a'] ) ) )
			);
		}
		echo implode( ",\n", $schema_faqs );
		?>
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
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'bmg-theme' ); ?></a>
				<span aria-hidden="true">/</span>
				<span><?php echo esc_html( wp_strip_all_tags( html_entity_decode( $service['title'] ) ) ); ?></span>
			</nav>
			<h1 class="section-sd-hero__title bmg-reveal"><?php echo wp_kses_post( $service['title'] ); ?></h1>
			<p class="section-sd-hero__sub bmg-reveal"><?php echo esc_html( $service['subtitle'] ); ?></p>
			<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="btn btn-cta-primary section-sd-hero__cta bmg-reveal d-inline-flex align-items-center gap-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
				<span><?php echo esc_html( $phone_display ); ?></span>
			</a>
		</div>
	</section>

	<!-- Section 2: Overview + What's Included (60/40 two-col) -->
	<section class="section-sd-overview">
		<div class="container">
			<div class="row align-items-start gy-5">
				<div class="col-lg-7 bmg-reveal">
					<span class="section-pill"><?php esc_html_e( 'ABOUT THIS SERVICE', 'bmg-theme' ); ?></span>
					<div class="section-sd-overview__text">
						<?php echo wp_kses_post( $service['description'] ); ?>
					</div>
				</div>

				<div class="col-lg-5 bmg-reveal">
					<div class="section-sd-includes__wrap">
						<span class="section-pill"><?php esc_html_e( "WHAT'S INCLUDED", 'bmg-theme' ); ?></span>
						<div class="row g-3">
							<?php foreach ( $service['includes'] as $item ) : ?>
								<div class="col-sm-6">
									<div class="section-sd-includes__card">
										<div class="section-sd-includes__icon" aria-hidden="true">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
										</div>
										<div>
											<h3 class="section-sd-includes__title"><?php echo wp_kses_post( $item['title'] ); ?></h3>
											<p class="section-sd-includes__desc"><?php echo esc_html( $item['desc'] ); ?></p>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 3: Why This Service Matters -->
	<section class="section-sd-why">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9 section-sd-why__content bmg-reveal text-center">
					<span class="section-pill"><?php esc_html_e( 'WHY IT MATTERS', 'bmg-theme' ); ?></span>
					<h2 class="section-title"><?php esc_html_e( 'Why East County Homeowners Need This', 'bmg-theme' ); ?></h2>
					<p class="section-sd-why__text"><?php echo esc_html( $service['why'] ); ?></p>
					<a href="tel:<?php echo esc_attr( $phone_link ); ?>" class="section-sd-why__phone">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						<?php esc_html_e( 'Questions? Call', 'bmg-theme' ); ?> <?php echo esc_html( $phone_display ); ?>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 4: FAQ -->
	<section class="section-sd-faq">
		<div class="container">
			<div class="text-center mb-5 bmg-reveal">
				<span class="section-pill"><?php esc_html_e( 'FAQ', 'bmg-theme' ); ?></span>
				<h2 class="section-title"><?php esc_html_e( 'Common Questions', 'bmg-theme' ); ?></h2>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<div class="accordion section-sd-faq__accordion bmg-reveal" id="serviceFaqAccordion">
						<?php foreach ( $service['faqs'] as $idx => $faq ) :
							$faq_id    = 'sd-faq-' . $slug . '-' . $idx;
							$expanded  = 0 === $idx ? 'true' : 'false';
							$show      = 0 === $idx ? ' show' : '';
							$collapsed = 0 === $idx ? '' : ' collapsed';
							?>
							<div class="accordion-item">
								<h3 class="accordion-header">
									<button
										class="accordion-button<?php echo esc_attr( $collapsed ); ?>"
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
									data-bs-parent="#serviceFaqAccordion"
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

	<!-- Section 5: CTA -->
	<?php get_template_part( 'template-parts/sections/section', 'cta' ); ?>

</main>

<?php
get_footer();
