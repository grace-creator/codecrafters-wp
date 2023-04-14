<?php
/* Template Name: About */
?>

<?php get_header(); ?>

<main>
  <div class="about-section">
    <div class="about-grid-container">
      <h1 class="about-title">About</h1>
      <p class="about-paragraph">Waggy Tail Mode. It's sure to add a playful and engaging element to your website, delighting visitors with the charming golden retriever following them around as they explore. This unique and interactive feature will create a memorable user experience, setting your website apart and showcasing your content.</p>
    </div>
  </div>

  <div class="image-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/ball.png" alt="Image 1" class="circle-image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/golden.png" alt="Image 2" class="circle-image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/bon.png" alt="Image 3" class="circle-image">
  </div>

  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/content', get_post_format() );
    endwhile;
  else :
    get_template_part( 'template-parts/content', 'none' );
  endif;
  ?>
</main>

<?php get_footer(); ?>
