<?php
/**
 * Title: Supper club feature
 * Slug: kitchenmess/supper-club
 * Categories: kitchenmess, kitchenmess-brands
 * Description: Photo and text promoting supper clubs, private dining and classes, with a brand partnership link.
 */
?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/supper.jpg' ) ); ?>" alt="Supper club table" style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:paragraph {"className":"is-style-label"} --><p class="is-style-label">Supper club · Private dining · Classes</p><!-- /wp:paragraph -->
		<!-- wp:heading --><h2 class="wp-block-heading">Taste it <em>in person</em></h2><!-- /wp:heading -->
		<!-- wp:paragraph --><p>Monthly supper clubs and private dinners in Hong Kong, plus hands-on cooking classes. Brands can be part of the table, from the knives on the board to the plates the courses arrive on.</p><!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://flirtyfridays.com/private-dining">Book a seat</a></div><!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/work-with-me/">Partner on an event</a></div><!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
