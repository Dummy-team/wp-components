<?php
/*
 * Returns lastest news
 * Called by [dt_news] shortcode
 */
function dt_news ( $atts, $content = null ) {
    $context = $atts;

    $postQuery = array(
      'post_type' => 'post',
      'posts_per_page' => $context['limit_show_news'],
    );
    query_posts($postQuery);
    $context['posts'] = Timber::get_posts();
    wp_reset_query();

    $out = Timber::compile('template.twig', $context);
    return $out;
}

add_shortcode('dt_news', 'dt_news');
