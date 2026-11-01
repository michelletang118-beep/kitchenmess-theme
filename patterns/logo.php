<?php
/**
 * Title: Kitchenmess logo (horizontal)
 * Slug: kitchenmess/logo
 * Inserter: no
 * Description: Brand wordmark linked to the home page. Uses the Site Logo if one is set in the editor, otherwise the bundled logo.
 */
$kitchenmess_logo = has_custom_logo() ? wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) : get_theme_file_uri( 'assets/images/logo-horizontal.png' );
?>
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"km-logo","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-full km-logo" style="margin-top:0;margin-bottom:0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $kitchenmess_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="600" height="198"/></a></figure>
<!-- /wp:image -->
