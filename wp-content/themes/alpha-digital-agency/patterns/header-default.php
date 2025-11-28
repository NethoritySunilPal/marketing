<?php
 /**
  * Title: Default Header
  * Slug: alpha-digital-agency/header-default
  * Categories: alpha-digital-agency
  */
?>

<!-- wp:group {"className":"top-header","style":{"spacing":{"padding":{"left":"0","right":"0","top":"10px","bottom":"10px"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group top-header has-primary-background-color has-background" style="padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.','alpha-digital-agency'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"24%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:24%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"normal","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-normal-font-size"><span class="dashicons dashicons-email"></span> <?php esc_html_e('info@example.com','alpha-digital-agency'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"normal","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-normal-font-size"><span class="dashicons dashicons-phone"></span> <?php esc_html_e('123456789','alpha-digital-agency'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"lower-header","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"background":"var(--wp--preset--color--foreground)"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group lower-header has-background" style="background-color:var(--wp--preset--color--foreground);padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:columns {"verticalAlignment":"center","className":"lower-header-inner"} -->
<div class="wp-block-columns are-vertically-aligned-center lower-header-inner"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"dummy-clumn"} -->
<div class="wp-block-column is-vertically-aligned-center dummy-clumn" style="flex-basis:45%">
<!-- wp:navigation {"textColor":"white","overlayBackgroundColor":"primary","overlayTextColor":"background","className":"header-navigation","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"}},"fontSize":"small","fontFamily":"inter","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blogs","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Elements","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","className":"header-logo","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="padding-top:0;padding-bottom:0;flex-basis:30%"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"cormorant"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%","className":"header-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-right-box" style="flex-basis:45%"><!-- wp:columns {"verticalAlignment":"center","className":"header-right-col"} -->
<div class="wp-block-columns are-vertically-aligned-center header-right-col"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-text-align-right has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Projetcs','alpha-digital-agency'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontFamily":"inter"} -->
<div class="wp-block-button has-inter-font-family"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><strong><?php esc_html_e('Contact Us','alpha-digital-agency'); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->