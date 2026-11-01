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
		<h1 class="wp-block-heading">Hi, I'm Michelle. I make a <em>delicious</em> mess.</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"lede"} -->
		<p class="has-lede-font-size">Tech executive by day, supper club host by night, and the cook behind every recipe on Kitchenmess.</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"km-cred"} -->
		<p class="km-cred">500+ dinner parties across 8 cities, all from a very small kitchen.</p>
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
	<!-- wp:heading --><h2 class="wp-block-heading">From Sydney sunshine to Hong Kong <em>hustle</em></h2><!-- /wp:heading -->
	<!-- wp:paragraph --><p>I grew up under Sydney's clear blue skies and now live in Hong Kong, a city that never sleeps and never stops eating. My day job is in tech and startups. My evenings belong to the stove, usually cooking for far more people than my kitchen was ever built for.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>Kitchenmess started as a place to record my experiments, adventures and misadventures in the kitchen (hence the name). It has grown into a collection of healthy, big-flavour recipes for people like me: busy, hungry, and keen to put something on the table that looks like it took far longer than it did.</p><!-- /wp:paragraph -->
	<!-- wp:paragraph --><p>No culinary school here. I have a double degree in Finance and Law, a stint as a MasterChef contestant in 2015 (terrifying), and years of feeding friends and strangers at my supper clubs. Every recipe is tested in my own tiny kitchen, so if I can pull it off on a Tuesday night, so can you.</p><!-- /wp:paragraph -->
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
	<ul class="wp-block-list is-style-dash"><!-- wp:list-item --><li>Sydney born, Hong Kong based</li><!-- /wp:list-item --><!-- wp:list-item --><li>Tech executive in the startup world</li><!-- /wp:list-item --><!-- wp:list-item --><li>Supper club host behind 500+ dinner parties across 8 cities</li><!-- /wp:list-item --><!-- wp:list-item --><li>MasterChef contestant, 2015</li><!-- /wp:list-item --><!-- wp:list-item --><li>Recipe developer for brands, including a Thermomix TM6 recipe series</li><!-- /wp:list-item --><!-- wp:list-item --><li>Cooking teacher, food stylist and photographer</li><!-- /wp:list-item --></ul>
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
