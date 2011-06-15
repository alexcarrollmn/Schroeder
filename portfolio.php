<?php
/*
Template Name: Portfolio
*/
?>
<? get_header(); ?>
<div id="content">
  <h3>Portfolio Pieces</h3>
<?
  $my_wp_query = new WP_Query();
  $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

  $portfolio =  get_page_by_title('Portfolio');

  $portfolio_children = get_page_children($portfolio->ID, $all_wp_pages);

  //echo '<pre>'.print_r($portfolio_children, true).'</pre>';
  ?>
  <ul>
    <?
  foreach ($portfolio_children as $child) {
          echo '<li><a href="' . get_bloginfo('url') . '/portfolio/' . $child->post_name . '">' . $child->post_title . '</a></li>';
  }
  ?>
  </ul>
</div>
<? get_footer(); ?>

