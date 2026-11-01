<?php
/**
 * Title: About the cook
 * Slug: kitchenmess/author-box
 * Categories: kitchenmess
 * Description: Author bio with credentials, shown under every post. Helps search and AI engines trust the recipe.
 */
?>
<!-- wp:group {"className":"km-author","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group km-author" style="margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false} -->
	<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile">
		<!-- wp:column {"verticalAlignment":"center","width":"120px"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:120px">
			<!-- wp:image {"width":"120px","aspectRatio":"1","scale":"cover","sizeSlug":"medium"} -->
			<figure class="wp-block-image size-medium is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portrait.jpg' ) ); ?>" alt="Michelle Tang" style="aspect-ratio:1;object-fit:cover;width:120px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:paragraph {"className":"is-style-label"} --><p class="is-style-label">About the cook</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Michelle Tang</h3><!-- /wp:heading -->
			<!-- wp:paragraph --><p>Private chef, supper club host, recipe developer and consultant. I travel to derive culinary inspirations to bring back to my dinner table. I author quick, healthy recipes for busy professionals who want meals to taste as good as they look.</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><a href="/about/">My story</a> · <a href="/work-with-me/">Work with me</a></p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
