<?php
/**
 * Title: Media kit: case study
 * Slug: kitchenmess/media-kit-case-study
 * Categories: kitchenmess-brands
 * Description: One past collaboration with a photo and a result.
 */
?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/case.jpg' ) ); ?>" alt="Past collaboration" style="aspect-ratio:4/5;object-fit:cover"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:paragraph {"className":"is-style-label"} --><p class="is-style-label">Case study</p><!-- /wp:paragraph -->
		<!-- wp:heading --><h2 class="wp-block-heading">Brand name × Kitchenmess <em>supper club</em></h2><!-- /wp:heading -->
		<!-- wp:paragraph --><p>Describe a past collaboration: what you made, where it ran and one result, such as reach, clicks or sales from a discount code.</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
