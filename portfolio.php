<?php
/*
Template Name: Portfolio
*/
?>
<? get_header(); ?>
<div id="content">
  <? if (have_posts()) : ?>
    <? while (have_posts()) : the_post(); ?>
      <div id="post-<? the_id(); ?>" class="post">
        <h2 class="post-title"><a href="<? the_permalink() ?>" title="Permalink to <? the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <div class="post_content">
          <? the_content(); ?>
        </div>
      </div>
    <? endwhile;?>
    <?else:?>
      <div id="not_found" class="post">
        <h2 class="post-title">Page Not Found</h2>
        <div class="post_content">
          <p>We're sorry but we were unable to find what you were looking for. Please search and try again.</p>
        </div>
      </div>
  <? endif;?>
</div>
<? get_footer(); ?>

