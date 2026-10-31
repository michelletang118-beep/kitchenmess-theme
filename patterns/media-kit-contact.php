<?php
/**
 * Title: Media kit: contact
 * Slug: kitchenmess/media-kit-contact
 * Categories: kitchenmess-brands
 * Description: Dark contact band. Add your contact form plugin's block in the right column.
 */
?>
<!-- wp:group {"align":"full","anchor":"contact","backgroundColor":"ink","textColor":"white","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1160px"}} -->
<div id="contact" class="wp-block-group alignfull has-white-color has-ink-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"textColor":"white"} --><h2 class="wp-block-heading has-white-color has-text-color">Let's cook something <em>together</em></h2><!-- /wp:heading -->
			<!-- wp:paragraph --><p>Email me at <a href="mailto:michelle@kitchenmess.com" style="color:inherit">michelle@kitchenmess.com</a> or use the form.</p><!-- /wp:paragraph -->
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
