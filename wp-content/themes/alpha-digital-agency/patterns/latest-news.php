<?php
 /**
  * Title: Latest News
  * Slug: alpha-digital-agency/latest-news
  * Categories: alpha-digital-agency
  */
?>

<!-- wp:group {"metadata":{"categories":["alpha-digital-agency"],"patternName":"alpha-digital-agency/latest-news","name":"Latest News"},"className":"home-blog-section","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group home-blog-section" style="padding-top:40px;padding-bottom:40px"><!-- wp:group {"className":"property-heading","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group property-heading"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"30px"}},"fontFamily":"cormorant"} -->
<h3 class="wp-block-heading has-text-align-center has-cormorant-font-family" style="font-size:30px"><span class="color-element"><?php esc_html_e('Latest News','alpha-digital-agency'); ?></span><?php esc_html_e(' &amp; Update','alpha-digital-agency'); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":"","offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","className":"grid-layout","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"has-shadow-dark  animated animated-fadeInUp","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-shadow-dark animated animated-fadeInUp" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"no-padding"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"},"blockGap":"10px"}},"backgroundColor":"background"} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="margin-top:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} /-->

<!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} /-->

<!-- wp:post-excerpt {"moreText":"Know More\u003ca role=\u0022textbox\u0022 aria-multiline=\u0022true\u0022 aria-label=\u0022\u0026quot;Read more\u0026quot; link text\u0022 class=\u0022block-editor-rich-text__editable wp-block-post-excerpt__more-link rich-text\u0022 style=\u0022font-size: revert; font-family: var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dpoppins); min-width: 1px; display: inline !important;\u0022\u003e\u003c/a\u003e","excerptLength":25,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"14px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontFamily":"inter"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-inter-font-family wp-element-button" style="font-style:normal;font-weight:600"><?php esc_html_e('View All News','alpha-digital-agency'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->