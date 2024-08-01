<?php
/**
 * Title: Two row grid, with title, paragraph, bold text and button
 * Slug: cirenhistfest/offset-layout
 * Categories: featured
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"var:preset|spacing|large"} -->
<div style="height:var(--wp--preset--spacing--large)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"icon_responsive","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group icon_responsive"><!-- wp:image {"id":46,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="http://cirencester-history-festival.local/wp-content/uploads/2024/07/chf-illustration_hare-dark-coral.webp" alt="" class="wp-image-46"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-large"} -->
<h1 class="wp-block-heading has-secondary-color has-text-color has-link-color has-x-large-font-size">A nice title to catch the attention</h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"dark","fontSize":"medium"} -->
<p class="has-dark-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.”</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">Button</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->