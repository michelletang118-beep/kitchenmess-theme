<?php
/**
 * Title: Home hero
 * Slug: kitchenmess/home-hero
 * Categories: kitchenmess, featured
 * Description: Headline, introduction, credentials and a tall photo.
 */
?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:paragraph {"className":"is-style-label km-rule"} -->
		<p class="is-style-label km-rule">Hong Kong · Seafood · Asian &amp; Mediterranean</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">Creativity begins in the <em>kitchen</em></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"lede"} -->
		<p class="has-lede-font-size">Recipes from a Hong Kong private chef and supper club host. Seafood done properly, weeknight Asian classics, and the tools that make them easier.</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"is-style-label"} -->
		<p class="is-style-label">Private chef · Supper club host · Cooking teacher · Nutrition writer</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/recipes/">The latest recipes</a></div><!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/work-with-me/">For brands</a></div><!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" alt="Miso glazed scallops" style="aspect-ratio:4/5;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
