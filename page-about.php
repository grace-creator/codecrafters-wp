<?php
/* Template Name: About */
?>

<?php get_header(); ?>

<main>
<section class="block block-1">
    <div class="block-4-text">
      <h1>About</h1>
      <p>This minimalist theme is designed to make your content shine. Its simplicity and clean design ensure that your users have an enjoyable experience navigating your website.</p>
    </div>
    <div 
    class="block-4-image" 
    id="ghost-image"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ghost2.png');">
    </div>
  </section>
   
  <div class="about-section">
  <p>Your about paragraph goes here.</p>
</div>

<div class="image-container">
  <img src="<?php echo get_template_directory_uri(); ?>/images/closed-e.png" alt="Image 1" class="circle-image">
  <img src="<?php echo get_template_directory_uri(); ?>/images/ghost2.png" alt="Image 2" class="circle-image">
  <img src="<?php echo get_template_directory_uri(); ?>/images/ghost2.png" alt="Image 3" class="circle-image">
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