<?php
/**
 * Title: My story (full About page)
 * Slug: kitchenmess/my-story-page
 * Categories: kitchenmess
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: The whole About page: intro, story, how I cook, quick facts and calls to action. Use with the "Wide page (no title)" template.
 */
?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:paragraph {"className":"is-style-label"} --><p class="is-style-label">My story</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">Tech by day. <em>Soirées</em> by night.</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"lede"} -->
		<p class="has-lede-font-size">Tech executive, supper club host, and the cook behind every recipe on Kitchenmess.</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"km-cred"} -->
		<p class="km-cred">The founder and chief hostess behind <a href="https://www.flirtyfridays.com">FlirtyFridays</a>, an intimate and convivial dinner party series designed for fostering authentic connections.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","className":"km-arch"} -->
		<figure class="wp-block-image size-large km-arch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.jpg' ) ); ?>" alt="Michelle Tang in her kitchen" style="aspect-ratio:4/5;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading --><h2 class="wp-block-heading">Behind the <em>table</em></h2><!-- /wp:heading -->
	<!-- wp:paragraph --><p>Hi! I'm Michelle and thanks for stumbling upon my blog. So let me start with a brief introduction. Cooking is my love language, and for an ambitious, fast-moving ADHD brain, it is my ultimate form of meditation.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>The sensory ritual of sourcing seasonal ingredients, layering bold flavours, and plating something beautiful is how I switch off from a week of screens, spreadsheets, and late-night calls. Nothing beats gathering people together—and that moment the room goes completely quiet because everyone is too busy eating? That is my favourite sound in the world.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>That passion sparked <a href="https://www.flirtyfridays.com">FlirtyFridays</a>, the supper club I founded in 2016 and still host: 500+ intimate dinner parties across eight global cities, built on the belief that good wine, restaurant-level home cooking, and a communal table can turn strangers into lifelong friends.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>No culinary school here. I have degrees in Finance and Law, survived a terrifying trial-by-fire on MasterChef in 2015, and spend my days scaling tech companies in data and AI while serving as a non-executive director on an ASX-listed board with frequent board meetings in the US.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>I grew up in Sydney under clear blue skies and superb flat whites, spent over a decade in Hong Kong—a fast-paced, food-obsessed concrete jungle—and now spend most of the year living out of a suitcase across the globe. Wherever I land, I'm hunting down farmers markets and reverse-engineering regional flavours for compact kitchens and high-impact dinner tables.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>Kitchenmess is the cheat sheet to that lifestyle: healthy, high-flavour, aesthetic plates engineered for people who are both busy and hungry. Every recipe is battle-tested in my own tiny kitchen. Zero pretension, maximum flavour, and completely doable on a weeknight.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>Pull up a chair, try a recipe, and let me know how it tastes from your corner of the world. Whether you're here to master weeknight dining, grab my hosting guide, or claim a seat at the next FlirtyFridays table—welcome.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>For brand collaborations, partnerships, or supper club inquiries, write to me directly at <a href="mailto:michelle@kitchenmess.com">michelle@kitchenmess.com</a>.</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"align":"wide"} --><h2 class="wp-block-heading alignwide">How I <em>cook</em></h2><!-- /wp:heading -->
<!-- wp:columns {"align":"wide","className":"km-steps","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"padding":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide km-steps" style="padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Great ingredients, little fuss</h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted","fontSize":"small"} --><p class="has-muted-color has-text-color has-small-font-size">Buy the freshest, best things you can find, then get out of their way. Most of my recipes take around 30 minutes.</p><!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Healthy, never boring</h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted","fontSize":"small"} --><p class="has-muted-color has-text-color has-small-font-size">Mostly plants, whole grains and good protein, with all the flavour left in. Food that makes you feel good the next morning too.</p><!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Made to share</h3><!-- /wp:heading --><!-- wp:paragraph {"textColor":"muted","fontSize":"small"} --><p class="has-muted-color has-text-color has-small-font-size">Plated like you mean it. A weeknight dinner for one should be able to double as a dinner party for eight.</p><!-- /wp:paragraph --></div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"km-panel","backgroundColor":"card","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide km-panel has-card-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading --><h2 class="wp-block-heading">The short <em>version</em></h2><!-- /wp:heading -->
	<!-- wp:list {"className":"is-style-dash"} -->
	<ul class="wp-block-list is-style-dash"><!-- wp:list-item --><li>Sydney born, a decade in Hong Kong, now cooking my way around the globe</li><!-- /wp:list-item --><!-- wp:list-item --><li>Non-executive director on an ASX-listed board (GAICD)</li><!-- /wp:list-item --><!-- wp:list-item --><li>Commercial growth executive in data and AI</li><!-- /wp:list-item --><!-- wp:list-item --><li>Founder of FlirtyFridays supper club (2016): 500+ dinner parties across 8 cities</li><!-- /wp:list-item --><!-- wp:list-item --><li>MasterChef contestant, 2015</li><!-- /wp:list-item --><!-- wp:list-item --><li>Recipe developer for brands, including a Thermomix TM6 recipe series</li><!-- /wp:list-item --><!-- wp:list-item --><li>Cooking teacher, food stylist and photographer</li><!-- /wp:list-item --></ul>
	<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kitchenmess/supper-club"} /-->

<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading --><h2 class="wp-block-heading">Say <em>hello</em></h2><!-- /wp:heading -->
	<!-- wp:paragraph --><p>Find your first recipe, or see how we can work together.</p><!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/recipes/">Get cooking</a></div><!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/work-with-me/">Work with me</a></div><!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kitchenmess/newsletter"} /-->
