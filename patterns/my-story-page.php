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
		<p class="has-lede-font-size">Hi, I'm Michelle: company director and tech executive, supper club host, and the cook behind every recipe on Kitchenmess.</p>
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
	<!-- wp:heading --><h2 class="wp-block-heading">The story <em>so far</em></h2><!-- /wp:heading -->
	<!-- wp:paragraph --><p>Cooking is my love language. Nothing gives me greater joy than to gather my friends together over a communal dining table and have them fed <em>well</em>. Part art, part science, there is something primal and nurturing about cooking. The process of sourcing quality ingredients, layering flavours and plating something beautiful is how I switch off from a week of screens and spreadsheets. And the moment a table goes quiet because everyone is too busy eating? That is my favourite sound.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>That love became FlirtyFridays, the supper club I founded and still host: intimate, convivial dinners where guests arrive as strangers and leave as friends.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>I grew up under Sydney's clear blue skies and now live in Hong Kong, a city that never sleeps and never stops eating. My days are spent growing tech companies in data and AI, with the odd board meeting. Kitchenmess is where I share what I cook the rest of the time: healthy, big-flavour recipes for people like me, busy and hungry, who want something on the table that looks like it took far longer than it did.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>No culinary school here. I have a double degree in Finance and Law, a stint as a MasterChef contestant in 2015 (terrifying), and years of feeding friends and strangers around my table. Every recipe is tested in my own tiny kitchen, so if I can pull it off on a Tuesday night, so can you.</p><!-- /wp:paragraph -->
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
	<ul class="wp-block-list is-style-dash"><!-- wp:list-item --><li>Sydney born, Hong Kong based</li><!-- /wp:list-item --><!-- wp:list-item --><li>Non-executive director on an ASX-listed board (GAICD)</li><!-- /wp:list-item --><!-- wp:list-item --><li>Commercial growth executive in data and AI</li><!-- /wp:list-item --><!-- wp:list-item --><li>Supper club host behind 500+ dinner parties across 8 cities</li><!-- /wp:list-item --><!-- wp:list-item --><li>MasterChef contestant, 2015</li><!-- /wp:list-item --><!-- wp:list-item --><li>Recipe developer for brands, including a Thermomix TM6 recipe series</li><!-- /wp:list-item --><!-- wp:list-item --><li>Cooking teacher, food stylist and photographer</li><!-- /wp:list-item --></ul>
	<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kitchenmess/supper-club"} /-->

<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading --><h2 class="wp-block-heading">Pull up a <em>chair</em></h2><!-- /wp:heading -->
	<!-- wp:paragraph --><p>Start with the recipes, join the newsletter for a new one every fortnight, or say hello at <a href="mailto:michelle@kitchenmess.com">michelle@kitchenmess.com</a>. Brands, the media kit is this way.</p><!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/recipes/">Get cooking</a></div><!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/work-with-me/">Work with me</a></div><!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kitchenmess/newsletter"} /-->
