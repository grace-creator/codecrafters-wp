<?php get_header(); ?>

<main>
  <div class="single-post-container">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header>

          <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail-container">
              <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
              </div>
            </div>
          <?php endif; ?>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>

          <?php comments_template(); ?>
        </article>
      <?php endwhile;
    else :
      get_template_part('template-parts/content', 'none');
    endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>
