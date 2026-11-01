<?php
/**
 * Title: Media kit: contact
 * Slug: kitchenmess/media-kit-contact
 * Categories: kitchenmess-brands
 * Description: Dark contact band. Add your contact form plugin's block in the right column.
 */
?>
<!-- wp:group {"align":"wide","anchor":"contact","className":"km-panel","backgroundColor":"plum","textColor":"white","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
<div id="contact" class="wp-block-group alignwide km-panel has-white-color has-plum-background-color has-text-color has-background" style="margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"textColor":"white"} --><h2 class="wp-block-heading has-white-color has-text-color">Let's make a <em>delicious</em> mess</h2><!-- /wp:heading -->
			<!-- wp:paragraph --><p>Email me at <a href="mailto:michelle@kitchenmess.com" style="color:inherit">michelle@kitchenmess.com</a> or use the form. Ask for the full media kit and I'll send audience numbers and past results privately.</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"km-form"} -->
		<div class="wp-block-column km-form">
			<!-- wp:paragraph {"className":"is-style-label"} --><p class="is-style-label">Add your contact form block here (WPForms, Fluent Forms or Contact Form 7)</p><!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
