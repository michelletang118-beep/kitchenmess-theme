<?php
/**
 * Title: Latest recipes with collections
 * Slug: kitchenmess/latest-recipes
 * Categories: kitchenmess, query
 * Description: Section heading, links to recipe collections and the six newest posts.
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading -->
	<h2 class="wp-block-heading">Cook by <em>craving</em></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"className":"is-style-label","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
	<p class="is-style-label" style="margin-bottom:var(--wp--preset--spacing--40)"><a href="/category/seafood/">Seafood at home</a> · <a href="/category/asian/">Asian classics</a> · <a href="/category/gluten-free/">Gluten-free</a> · <a href="/category/nutrition-articles/">Nutrition</a></p>
	<!-- /wp:paragraph -->
	<!-- wp:query {"queryId":3,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"km-cards","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:post-featured-image {"isLink":true,"sizeSlug":"kitchenmess-portrait"} /-->
			<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
			<!-- wp:post-terms {"term":"category","textColor":"muted"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
