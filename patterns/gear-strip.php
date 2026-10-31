<?php
/**
 * Title: Gear strip (in a post)
 * Slug: kitchenmess/gear-strip
 * Categories: kitchenmess-brands
 * Description: Three products with photo and affiliate link, for the "What you'll need" part of a recipe.
 */
?>
<!-- wp:heading -->
<h2 class="wp-block-heading">What you'll <em>need</em></h2>
<!-- /wp:heading -->
<!-- wp:columns {"align":"wide","className":"km-gear-strip"} -->
<div class="wp-block-columns alignwide km-gear-strip">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:media-text {"mediaType":"image","mediaWidth":30,"isStackedOnMobile":false,"imageFill":true,"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem"}}}} -->
			<div class="wp-block-media-text is-image-fill" style="padding-top:0.5rem;padding-bottom:0.5rem;grid-template-columns:30% auto"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_theme_file_uri( 'assets/images/gear-knife.jpg' ) ); ?>);background-position:50% 50%"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gear-knife.jpg' ) ); ?>" alt="Petty knife, 135 mm"/></figure><div class="wp-block-media-text__content">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} --><p class="has-small-font-size" style="font-weight:700">Petty knife, 135 mm</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-label"} --><p class="is-style-label"><a class="aff" href="#add-affiliate-link" rel="sponsored nofollow noopener" target="_blank">Check price ↗</a></p><!-- /wp:paragraph -->
			</div></div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:media-text {"mediaType":"image","mediaWidth":30,"isStackedOnMobile":false,"imageFill":true,"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem"}}}} -->
			<div class="wp-block-media-text is-image-fill" style="padding-top:0.5rem;padding-bottom:0.5rem;grid-template-columns:30% auto"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_theme_file_uri( 'assets/images/gear-pan.jpg' ) ); ?>);background-position:50% 50%"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gear-pan.jpg' ) ); ?>" alt="Carbon steel pan"/></figure><div class="wp-block-media-text__content">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} --><p class="has-small-font-size" style="font-weight:700">Carbon steel pan</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-label"} --><p class="is-style-label"><a class="aff" href="#add-affiliate-link" rel="sponsored nofollow noopener" target="_blank">Check price ↗</a></p><!-- /wp:paragraph -->
			</div></div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:media-text {"mediaType":"image","mediaWidth":30,"isStackedOnMobile":false,"imageFill":true,"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem"}}}} -->
			<div class="wp-block-media-text is-image-fill" style="padding-top:0.5rem;padding-bottom:0.5rem;grid-template-columns:30% auto"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_theme_file_uri( 'assets/images/gear-plate.jpg' ) ); ?>);background-position:50% 50%"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/gear-plate.jpg' ) ); ?>" alt="Celadon plate"/></figure><div class="wp-block-media-text__content">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} --><p class="has-small-font-size" style="font-weight:700">Celadon plate</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"is-style-label"} --><p class="is-style-label"><a class="aff" href="#add-affiliate-link" rel="sponsored nofollow noopener" target="_blank">Check price ↗</a></p><!-- /wp:paragraph -->
			</div></div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:column -->
</div>
<!-- /wp:columns -->
