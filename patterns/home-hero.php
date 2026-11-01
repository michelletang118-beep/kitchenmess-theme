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
		<p class="is-style-label km-rule">Healthy · Quick · Made to impress</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">Messy kitchen. <mark>Seriously</mark> <em>good</em> food.</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"lede"} -->
		<p class="has-lede-font-size">Restaurant-level plates, zero pretension. Healthy, big-flavour recipes that make hosting look effortless, even in a tiny kitchen.</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"km-cred"} -->
		<p class="km-cred">From a tech executive and supper club host behind 500+ dinner parties across 8 cities.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
			<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/recipes/">Get cooking</a></div><!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/work-with-me/">For brands</a></div><!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center","className":"km-hero-photo"} -->
	<div class="wp-block-column is-vertically-aligned-center km-hero-photo">
		<!-- wp:group {"className":"km-sticker","layout":{"type":"default"}} -->
		<div class="wp-block-group km-sticker"><!-- wp:paragraph --><p>Weeknight quick<em>dinner-party pretty</em></p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->
		<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large","className":"km-arch"} -->
		<figure class="wp-block-image size-large km-arch"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" alt="Miso glazed scallops" style="aspect-ratio:4/5;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
