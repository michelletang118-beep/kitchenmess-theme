<?php
/**
 * Title: Pink ticker (recipe categories)
 * Slug: kitchenmess/ticker
 * Categories: kitchenmess
 * Description: Scrolling pink band of recipe categories, each linking to its category page. Edit the list below to match your category slugs.
 */
$kitchenmess_cats = array(
	array( 'Keto', 'keto' ),
	array( '30 minute meals', '30-minute-meals' ),
	array( 'Vegetarian', 'vegetarian' ),
	array( 'Chinese', 'chinese' ),
	array( 'Mediterranean', 'mediterranean' ),
	array( 'Seafood', 'seafood' ),
	array( 'Japanese', 'japanese' ),
	array( 'Gluten-free', 'gluten-free' ),
	array( 'Thai', 'thai' ),
	array( 'Desserts', 'dessert' ),
);
?>
<!-- wp:group {"align":"full","className":"km-ticker","backgroundColor":"pink","textColor":"ink","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull km-ticker has-ink-color has-pink-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:1rem;padding-bottom:1rem">
	<!-- wp:group {"className":"km-ticker-track","layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group km-ticker-track">
<?php
for ( $kitchenmess_i = 0; $kitchenmess_i < 2; $kitchenmess_i++ ) :
	foreach ( $kitchenmess_cats as $kitchenmess_n => $kitchenmess_cat ) :
		$kitchenmess_label = esc_html( $kitchenmess_cat[0] );
		if ( $kitchenmess_n % 2 ) {
			$kitchenmess_label = '<em>' . $kitchenmess_label . '</em>';
		}
		?>
		<!-- wp:paragraph --><p><a href="<?php echo esc_url( home_url( '/category/' . $kitchenmess_cat[1] . '/' ) ); ?>"><?php echo $kitchenmess_label; // phpcs:ignore WordPress.Security.EscapeOutput -- escaped above. ?></a></p><!-- /wp:paragraph -->
		<?php
	endforeach;
endfor;
?>
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
