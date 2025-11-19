<?php
/**
 * Title: Latest Posts
 * Slug: blockskit-marketing-agency/home-latest-posts
 * Categories: theme
 * Keywords: posts
 */
?>
<!-- wp:group {"metadata":{"name":"latest-posts"},"align":"full","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:90px;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:90px;padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"right":"var:preset|spacing|large","top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"section-title"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":182,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/blog-img1.png' ) ); ?>" alt="" class="wp-image-182"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"40px"}},"fontFamily":"adamina"} -->
<h3 class="wp-block-heading has-adamina-font-family" style="font-size:40px"><?php esc_html_e( 'Read Our Latest News &amp; Insights', 'blockskit-marketing-agency' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Praesent rhoncus necessitatibus proident vestibulum, doloribus, luctus. Vitae auctor, suspendisse quisque pretium oncus. Corporis, est! Neque officiis eleifend.', 'blockskit-marketing-agency' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-bk-button-secondary","style":{"border":{"radius":"30px"}}} -->
<div class="wp-block-button is-style-bk-button-secondary"><a class="wp-block-button__link wp-element-button" style="border-radius:30px"><?php esc_html_e( 'MORE BLOGS', 'blockskit-marketing-agency' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:query {"queryId":20,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|large"}},"backgroundColor":"pure-white","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"30px","width":"0px","style":"none"},"shadow":"var:preset|shadow|shadow-1"},"backgroundColor":"pure-white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-pure-white-background-color has-background" style="border-style:none;border-width:0px;border-radius:30px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small);box-shadow:var(--wp--preset--shadow--shadow-1)"><!-- wp:post-featured-image {"style":{"elements":{"link":{"color":{"text":"var:preset|color|highlight"}}},"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"30px","topRight":"30px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"style":{"typography":{"textTransform":"capitalize","letterSpacing":"0px","lineHeight":"1.3"}},"fontSize":"large","fontFamily":"adamina"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:post-author-name {"fontSize":"x-small"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|outline"}}}},"textColor":"outline","fontSize":"x-small"} -->
<p class="has-outline-color has-text-color has-link-color has-x-small-font-size">|</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"LEARN MORE...","excerptLength":14} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->