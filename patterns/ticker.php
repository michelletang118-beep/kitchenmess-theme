<?php
/**
 * Title: Pink ticker
 * Slug: kitchenmess/ticker
 * Categories: kitchenmess
 * Description: Scrolling pink band of what Kitchenmess is about. Words in italics show in the serif accent.
 */
$kitchenmess_items = array(
	array( 'Seafood', 'done properly' ),
	array( 'Japanese knives', 'sharp &amp; handmade' ),
	array( 'Supper clubs', 'in Hong Kong' ),
	array( 'Weeknight Asian', 'no fuss' ),
);
?>
<!-- wp:group {"align":"full","className":"km-ticker","backgroundColor":"pink","textColor":"ink","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull km-ticker has-ink-color has-pink-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:1rem;padding-bottom:1rem">
	<!-- wp:group {"className":"km-ticker-track","layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group km-ticker-track">
<?php for ( $kitchenmess_i = 0; $kitchenmess_i < 2; $kitchenmess_i++ ) : foreach ( $kitchenmess_items as $kitchenmess_item ) : ?>
		<!-- wp:paragraph --><p><?php echo $kitchenmess_item[0]; ?> <em><?php echo $kitchenmess_item[1]; ?></em></p><!-- /wp:paragraph -->
<?php endforeach; endfor; ?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
