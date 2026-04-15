<?php
/**
 * Deploy blog posts to production.
 * Run via: wp eval-file /path/to/deploy-blog-posts.php --path=/path/to/wp
 *
 * @package bmg-theme
 */

$posts = array(

	array(
		'slug'            => 'how-to-choose-plumber-el-cajon',
		'title'           => 'How Do I Choose the Right Plumber in El Cajon?',
		'rank_math_title' => 'How to Choose the Right Plumber in El Cajon | RD Hydrojet',
		'rank_math_desc'  => 'Not sure how to find a reliable plumber in El Cajon? Here\'s what to look for before you hire — licensing, local experience, communication, and more.',
		'categories'      => array( 'Plumbing Tips' ),
		'faq_schema'      => json_encode( array(
			'@context'   => 'https://schema.org',
			'@type'      => 'FAQPage',
			'mainEntity' => array(
				array( '@type' => 'Question', 'name' => 'Are plumbers in El Cajon required to be licensed?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Yes. Plumbers in California must hold the appropriate state contractor\'s license. Verify through the California Contractors State License Board before hiring.' ) ),
				array( '@type' => 'Question', 'name' => 'Do plumbers in El Cajon give free estimates?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'It depends on the job. Many companies offer free estimates for straightforward projects. For diagnostic work a service fee may apply. A trustworthy plumber explains this upfront.' ) ),
				array( '@type' => 'Question', 'name' => 'What should I ask before hiring a plumber?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Ask about licensing and insurance, whether they handle your type of problem regularly, how they diagnose issues before recommending repairs, how pricing works, and whether they offer emergency service.' ) ),
				array( '@type' => 'Question', 'name' => 'How do I know if a plumber serves El Cajon?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Ask directly whether the company regularly works in El Cajon and East San Diego County. Check whether their reviews include customers from the local area.' ) ),
				array( '@type' => 'Question', 'name' => 'How do I find a plumber who offers emergency service in El Cajon?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Search for plumbers advertising 24/7 emergency response in El Cajon, then call and ask directly about availability and response time before a problem happens.' ) ),
			),
		), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ),
		'content' => <<<'POST1'
When you need a plumber in El Cajon, you are probably not searching for one because you have extra time to compare contractors. Something went wrong. A drain is backed up, a pipe is leaking, a water heater stopped working. You need help, and you need it from someone you can trust.

The problem is that most plumbing companies sound identical online. Everyone claims to be fast, professional, and affordable. So how do you actually tell the difference?

The answer is to look past the generic language and focus on the specifics that really matter: local experience, licensing, communication, and whether the company is actually equipped to solve your type of problem correctly the first time.

<h2>Start with local experience</h2>

The first thing worth checking is whether the plumbing company genuinely works in El Cajon and East San Diego County on a regular basis.

That matters more than people realize. Plumbing problems vary by neighborhood, home age, pipe material, and local infrastructure. A plumber who regularly serves El Cajon understands the kinds of drain and sewer issues common in East County, including older sewer lines, root intrusion from mature trees, hard water buildup, and homes with aging galvanized pipes.

Local also means realistic response times, better availability for follow-up, and a reputation you can verify from neighbors and nearby communities rather than reviews from across the county.

<h2>Check that they are licensed and insured</h2>

This should never be skipped.

A professional plumber in California must carry the proper license and insurance to perform plumbing work legally. That protects you if something goes wrong during the job. It also tells you the company operates as a real business with real accountability.

A trustworthy plumber should be comfortable answering questions about licensing and insurance without hesitation. If a company is vague about their credentials, that is worth paying attention to.

<h2>Ask what they actually specialize in</h2>

Not every plumbing company is equally skilled at every type of job.

Some plumbers focus on fixture replacement and general residential repairs. Others specialize in drain cleaning, sewer camera inspection, hydro jetting, leak detection, water heater service, or septic systems.

Asking a direct question early saves time: "Do you handle this type of problem regularly?"

If you are dealing with a recurring clog, multiple slow drains, or a sewer backup, you do not want someone who can only clear the immediate symptom. You want a plumber who knows when a camera inspection makes sense, when hydro jetting is the right call, and when a deeper sewer issue may be involved.

Choosing a plumber with the right specialty can save you from calling someone again for the same problem in three months.

<h2>Read reviews beyond the star rating</h2>

Reviews matter, but the number of stars tells you less than what people actually say.

Look for patterns. Do customers mention clear communication, honest assessments, and repairs that actually held up? Do they say the plumber explained what was wrong before starting work? Do reviews come from people in El Cajon, La Mesa, Santee, or nearby East County communities?

A plumber with consistent reviews from your area is a better signal than a company with a high average from customers spread across the entire region.

<h2>Ask about estimates and pricing upfront</h2>

A common question homeowners ask is whether plumbers in El Cajon offer free estimates.

The answer depends on the type of work. Some companies offer free project estimates. Others charge a diagnostic fee when a technician needs to inspect the system to find the actual cause of a problem. That is reasonable, especially for drain or sewer issues that require evaluation before a fix can be recommended.

What matters is transparency. A good plumber should explain upfront whether there is a diagnostic fee, what it covers, whether it applies toward the repair, and how pricing is confirmed before work begins. Vague answers or unexpected charges are a sign of poor communication.

<h2>Find out how they handle emergencies</h2>

Plumbing problems do not schedule themselves during business hours.

Before hiring, ask whether the company offers same-day service, how they handle after-hours calls, and what their realistic response time looks like for El Cajon and East County. Some companies advertise 24/7 emergency plumbing but cannot clearly explain availability when asked directly.

For a serious leak, sewer backup, or water heater failure, response time is just as important as price.

<h2>Look for long-term thinking, not just quick fixes</h2>

One of the clearest signs of a good plumber is whether they help you understand why the problem happened, not just clear it and leave.

Recurring kitchen drain clogs often point to grease buildup. Multiple slow drains at once may indicate a main sewer problem. Frequent backups in the same line may mean root intrusion or heavy scale inside the pipe.

A plumber who explains the root cause and gives you honest options helps you avoid the same service call three months from now.

<h2>Questions to ask before hiring a plumber in El Cajon</h2>

Here are a few good questions to ask before booking:

<ul>
<li>Are you licensed and insured?</li>
<li>Do you regularly serve El Cajon and East County?</li>
<li>Do you handle this type of plumbing issue often?</li>
<li>Do you offer same-day or emergency service?</li>
<li>Will you diagnose the cause before recommending a repair?</li>
<li>Do you offer camera inspections or hydro jetting if needed?</li>
<li>How is pricing handled?</li>
<li>Is there a warranty on the work?</li>
</ul>

These questions are simple, but the answers will tell you a lot about how a company operates.

<h2>Ready to talk to a local plumber in El Cajon?</h2>

If you are in El Cajon or anywhere in East San Diego County and need a plumber who is licensed, locally experienced, and honest about what the problem actually is, contact RD Hydrojet today or call <a href="tel:6195711777">619-571-1777</a>. Same-day service is available for most drain, sewer, and plumbing issues across East County.

<h2>Frequently asked questions</h2>

<strong>Are plumbers in El Cajon required to be licensed?</strong>
Yes. Plumbers performing work in California must hold the appropriate state contractor's license. Always ask for license information before hiring, and verify it through the California Contractors State License Board if needed.

<strong>Do plumbers in El Cajon give free estimates?</strong>
It depends on the job. Many companies offer free estimates for straightforward projects. For diagnostic work, a service fee may apply. A trustworthy plumber will explain this upfront before scheduling.

<strong>How do I know if a plumber serves El Cajon?</strong>
Ask directly whether the company regularly works in El Cajon and East San Diego County. Check whether their reviews include customers from the area.

<strong>What should I ask before hiring a plumber?</strong>
Ask about licensing and insurance, whether they handle your type of problem regularly, how they diagnose the issue before recommending repairs, how pricing works, and whether they offer emergency or same-day service.

<strong>How do I find a plumber who offers emergency service in El Cajon?</strong>
Search for plumbers advertising 24/7 emergency response in El Cajon, then call and ask directly about their actual availability and response time.
POST1
	),

	array(
		'slug'            => 'hydro-jetting-vs-snaking-east-san-diego',
		'title'           => 'Hydro Jetting vs. Snaking in East San Diego: Which One Do You Actually Need?',
		'rank_math_title' => 'Hydro Jetting vs. Snaking in East San Diego | RD Hydrojet',
		'rank_math_desc'  => 'Recurring drain clogs in East San Diego? Learn when snaking is enough and when hydro jetting is the better fix for your pipes. Clear, honest breakdown.',
		'categories'      => array( 'Drain Cleaning' ),
		'faq_schema'      => json_encode( array(
			'@context'   => 'https://schema.org',
			'@type'      => 'FAQPage',
			'mainEntity' => array(
				array( '@type' => 'Question', 'name' => 'What is the difference between hydro jetting and snaking?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Snaking uses a cable to punch through or pull out a blockage. Hydro jetting uses high-pressure water to scour the interior walls of the pipe and flush debris out of the line. Snaking works well for simple clogs. Hydro jetting is better for recurring issues, heavy buildup, or main sewer problems.' ) ),
				array( '@type' => 'Question', 'name' => 'Is hydro jetting safe for older pipes?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'It depends on pipe condition. Hydro jetting is safe for structurally sound pipes. For older lines, a camera inspection is typically recommended first to confirm the pipe can handle the pressure.' ) ),
				array( '@type' => 'Question', 'name' => 'Does hydro jetting remove tree roots?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Yes. Hydro jetting can clear root intrusion from a sewer line. If roots are entering through damaged pipe, they may return after clearing. A camera inspection can determine whether repair is also needed.' ) ),
				array( '@type' => 'Question', 'name' => 'When should I choose hydro jetting over snaking?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'Hydro jetting is the better choice when clogs keep returning, multiple drains are slow, the main sewer line is involved, or there is significant grease, sludge, or root buildup. For a simple one-time clog, snaking is often sufficient.' ) ),
				array( '@type' => 'Question', 'name' => 'Should a camera inspection happen before hydro jetting?', 'acceptedAnswer' => array( '@type' => 'Answer', 'text' => 'In many cases, yes. A camera inspection identifies where the blockage is, what it is made of, and whether the pipe is in good enough condition for hydro jetting.' ) ),
			),
		), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ),
		'content' => <<<'POST2'
If you have a clogged drain or a recurring sewer problem in East San Diego, one question comes up often: do I need drain snaking, or is hydro jetting the better option?

Most homeowners have heard both terms, but they are not always sure what the real difference is. Both clear clogs. Both restore drain flow. But they do not do the same job, and choosing the wrong one for your situation can mean paying for a temporary fix instead of a real solution.

If you live in El Cajon, La Mesa, Santee, Lemon Grove, Spring Valley, or elsewhere in East County, here is a clear breakdown to help you understand what each method does and when one makes more sense than the other.

<h2>What is drain snaking?</h2>

Drain snaking is one of the most common methods used to clear a clogged pipe.

A snake, also called a drain auger, is a flexible cable fed into the pipe to punch through or pull apart a blockage. It works well for many everyday clogs, especially when the blockage is close to the drain opening and caused by a simple obstruction.

Snaking is often a good fit for:

<ul>
<li>Isolated bathroom sink or tub clogs</li>
<li>Hair buildup near the drain opening</li>
<li>Minor toilet blockages</li>
<li>Small, localized stoppages in a single fixture</li>
</ul>

For these situations, snaking is quick, effective, and practical. It is often the right first step.

The limitation is that snaking typically punches a hole through the blockage rather than cleaning the walls of the pipe. The drain starts moving again, but grease, sludge, soap residue, mineral scale, or root material can still be coating the interior of the line. That buildup does not go away on its own.

<h2>What is hydro jetting?</h2>

Hydro jetting is a more thorough method of drain and sewer cleaning.

Rather than using a cable to break through the clog, hydro jetting sends highly pressurized water through the pipe to scour the interior walls and flush debris out of the line. The result is a much cleaner pipe than standard snaking typically produces.

Hydro jetting is commonly used for:

<ul>
<li>Recurring drain clogs</li>
<li>Main sewer line backups</li>
<li>Grease and sludge buildup</li>
<li>Mineral scale inside the pipe</li>
<li>Root intrusion</li>
<li>Drains that have already been snaked but keep backing up</li>
<li>Preventive maintenance on older lines</li>
</ul>

This is why hydro jetting is often the stronger long-term solution when the problem goes beyond a simple surface-level clog.

<h2>So which one is right for your situation?</h2>

The honest answer is that it depends on what you are dealing with.

A bathroom drain clogged with hair near the opening is a different problem than a main sewer line coated with years of grease and debris. Treating both the same way does not make sense.

If the issue is minor and isolated, snaking is usually enough. If the drain keeps backing up after being cleared, if multiple drains are slowing down at the same time, or if you have an older home with years of buildup in the sewer line, hydro jetting is typically the better option.

<h2>When snaking is the right call</h2>

Snaking makes sense when:

<ul>
<li>The clog is minor and in one fixture</li>
<li>The blockage is close to the drain opening</li>
<li>The drain has not had recurring problems</li>
<li>The issue is isolated with no other symptoms</li>
</ul>

For simple, one-time stoppages, snaking is often faster and more cost-effective. If it works and the problem does not come back, it was the right choice.

But if you have had the same drain snaked before and the clog keeps returning, that is worth paying attention to.

<h2>When hydro jetting is worth it</h2>

Hydro jetting is usually the better option when:

<ul>
<li>The same drain keeps clogging again</li>
<li>More than one drain is affected at the same time</li>
<li>The main sewer line is involved</li>
<li>There is grease or sludge buildup in the line</li>
<li>Roots have entered the pipe</li>
<li>Previous snaking only provided temporary relief</li>
</ul>

This is especially relevant in East San Diego County, where many neighborhoods have homes built decades ago and sewer lines that have never been thoroughly cleaned. If your drain clears after service and then slows down again within a few weeks or months, the pipe walls are likely still coated with buildup that snaking did not remove.

<h2>Is hydro jetting safe for pipes?</h2>

This is one of the most common questions homeowners ask, and it is a fair one.

Hydro jetting is safe when the pipe is in suitable condition and the service is done by an experienced technician. That is why a sewer camera inspection is often recommended before hydro jetting, particularly in older homes or when the problem is not fully understood.

A camera inspection helps confirm where the blockage is, what it is made of, and whether the pipe is structurally sound enough for high-pressure cleaning. If a pipe is already severely cracked, collapsed, or deteriorated, repair may be needed before cleaning is appropriate.

That inspection step is not extra caution for its own sake. It is how the right solution gets matched to the actual problem.

<h2>Can hydro jetting remove tree roots?</h2>

Yes. Hydro jetting can be very effective at clearing root intrusion, especially fine roots that have entered the line through pipe joints or small cracks.

That said, clearing roots from the pipe and fixing the reason they got in are two different things. If roots are entering because the pipe is damaged or the joint has failed, they may return after the line is cleared. Hydro jetting solves the blockage. Repair addresses the structural reason behind it.

A camera inspection after clearing helps confirm whether further repair is needed or whether the cleaned line is in good condition going forward.

<h2>What about cost?</h2>

Hydro jetting typically costs more than snaking because it involves more specialized equipment and often includes additional line evaluation.

But cost should be weighed against the outcome you are paying for.

If snaking clears a one-time clog and the drain stays clear, that was the right call. If you are paying for repeated clearing of the same line every few months because the pipe walls are still coated with buildup, hydro jetting may actually be the better value over time because it solves the underlying condition rather than the repeated symptom.

<h2>Signs that hydro jetting may be the right move</h2>

Here are a few situations where it is worth asking about hydro jetting:

<ul>
<li>The same drain has been snaked more than once in the past year</li>
<li>Multiple drains in the home are slow at the same time</li>
<li>You notice drain odors or gurgling sounds</li>
<li>You have had root intrusion in the sewer line before</li>
<li>Your home is older and the line has never been thoroughly cleaned</li>
<li>Previous drain service only held for a short time</li>
</ul>

<h2>Not sure which service you need?</h2>

The best next step is not guessing. Contact RD Hydrojet or call <a href="tel:6195711777">619-571-1777</a> and describe what you are dealing with. We serve El Cajon, La Mesa, Santee, Lemon Grove, Spring Valley, and the surrounding East San Diego County area and can help you figure out whether snaking, hydro jetting, or a camera inspection makes the most sense for your situation.

<h2>Frequently asked questions</h2>

<strong>What is the difference between hydro jetting and snaking?</strong>
Snaking uses a cable to punch through or pull out a blockage. Hydro jetting uses high-pressure water to scour the interior walls of the pipe and flush debris out of the line. Snaking works well for simple clogs. Hydro jetting is better for recurring issues, heavy buildup, or main sewer problems.

<strong>Is hydro jetting safe for older pipes?</strong>
It depends on the condition of the pipe. Hydro jetting is safe for pipes that are structurally sound. For older lines, a camera inspection is typically recommended first to confirm the pipe can handle the pressure before cleaning begins.

<strong>Does hydro jetting remove tree roots?</strong>
Yes. Hydro jetting can clear root intrusion from a sewer line. However, if roots are entering through a damaged section of pipe, they may return after clearing. A camera inspection can determine whether the line also needs repair.

<strong>When should I choose hydro jetting over snaking?</strong>
Hydro jetting is usually the better choice when clogs keep returning, multiple drains are slow at the same time, the main sewer line is involved, or there is significant grease, sludge, or root buildup in the line. For a simple one-time clog in a single fixture, snaking is often sufficient.

<strong>Should a camera inspection happen before hydro jetting?</strong>
In many cases, yes. A camera inspection helps identify where the blockage is, what it is made of, and whether the pipe is in good enough condition for hydro jetting.
POST2
	),

);

foreach ( $posts as $post ) {

	$existing = get_posts( array(
		'name'           => $post['slug'],
		'post_type'      => 'post',
		'post_status'    => 'any',
		'posts_per_page' => 1,
	) );

	if ( ! empty( $existing ) ) {
		echo 'SKIPPED (already exists): ' . $post['slug'] . "\n";
		continue;
	}

	$cat_ids = array();
	foreach ( $post['categories'] as $cat_name ) {
		$cat = get_term_by( 'name', $cat_name, 'category' );
		if ( $cat ) {
			$cat_ids[] = $cat->term_id;
		} else {
			$new_cat   = wp_insert_term( $cat_name, 'category' );
			$cat_ids[] = is_wp_error( $new_cat ) ? 1 : $new_cat['term_id'];
		}
	}

	$post_id = wp_insert_post( array(
		'post_title'    => $post['title'],
		'post_name'     => $post['slug'],
		'post_content'  => $post['content'],
		'post_status'   => 'publish',
		'post_type'     => 'post',
		'post_author'   => 1,
		'post_category' => $cat_ids,
	) );

	if ( is_wp_error( $post_id ) ) {
		echo 'ERROR: ' . $post['slug'] . ' — ' . $post_id->get_error_message() . "\n";
		continue;
	}

	update_post_meta( $post_id, 'rank_math_title',       $post['rank_math_title'] );
	update_post_meta( $post_id, 'rank_math_description', $post['rank_math_desc'] );
	update_post_meta( $post_id, 'rank_math_schema_FAQ',  $post['faq_schema'] );

	echo 'CREATED [' . $post_id . ']: ' . $post['slug'] . "\n";
}

echo "\nDone.\n";
