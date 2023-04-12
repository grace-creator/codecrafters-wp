<?php
/* Template Name: Blog */
?>

<?php get_header(); ?>

<main>
  <div class="blog-container">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 6,
      'paged' => $paged,
    );
    $blog_posts = new WP_Query($args);

    if ($blog_posts->have_posts()) :
      while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="post-wrapper">
            <?php if (has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
              </div>
            <?php endif; ?>
            <div class="post-content">
              <header class="entry-header">
                <h2 class="entry-title">
                  <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h2>
              </header>
              <div class="entry-summary">
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
        </article>
      <?php endwhile;

      the_posts_pagination(array(
        'prev_text' => 'Previous',
        'next_text' => 'Next',
      ));

    else :
      get_template_part('template-parts/content', 'none');
    endif;

    wp_reset_postdata();
    ?>
  </div>
</main>

<?php get_footer(); ?>
