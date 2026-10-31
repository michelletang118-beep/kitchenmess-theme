<?php
/**
 * Title: Kitchenmess logo (round icon)
 * Slug: kitchenmess/logo-icon
 * Inserter: no
 * Description: Round KM icon linked to the home page.
 */
?>
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"km-footer-logo"} -->
<figure class="wp-block-image size-full km-footer-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo-icon.png' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="400" height="411"/></a></figure>
<!-- /wp:image -->
