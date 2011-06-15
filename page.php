<? get_header(); ?>
    <div id="blog">
      <? if (have_posts()) : ?>
        <? while (have_posts()) : the_post(); ?>
          <div id="post-<? the_id(); ?>" class="post">
            <h3 class="post-title"><a href="<? the_permalink() ?>" title="Permalink to <? the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <div class="post_content">
              <? the_content(); ?>
            </div>
            <p class="post_meta">This was posted on <?the_time('l, FjS, Y');?> in <?the_category(', ');?></p>
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
      <?php 
      global $wp_query, $wp_rewrite;
      $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

      $pagination = array(
      	'base' => @add_query_arg('page','%#%'),
      	'format' => '',
      	'total' => $wp_query->max_num_pages,
      	'current' => $current,
      	'show_all' => true,
      	'type' => 'plain'
      	);

      if( $wp_rewrite->using_permalinks() )
      	$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

      if( !empty($wp_query->query_vars['s']) )
      	$pagination['add_args'] = array( 's' => get_query_var( 's' ) );

      echo paginate_links( $pagination );
      ?>
    </div>
    <div id="blogroll">
      <?get_links_list();?>
    </div>
<? get_footer(); ?>

