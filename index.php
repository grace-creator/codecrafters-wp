<?php get_header(); ?>

<main>
<section class="block block-1">
    <div class="block-1-text">
      <h2>Welcome to my Minimalist Theme</h2>
      <p>This minimalist theme is designed to make your content shine. Its simplicity and clean design ensure that your users have an enjoyable experience navigating your website.</p>
    </div>
    <div class="block-1-image">
      <!-- Add your image here -->
    </div>
  </section>
  
  <section class="block block-2">
    <div class="block-2-text">
      <h3>Feature 1</h3>
      <p>Describe the feature here.</p>
    </div>
    <div class="block-2-text">
      <h3>Feature 2</h3>
      <p>Describe the feature here.</p>
    </div>
    <div class="block-2-text">
      <h3>Feature 3</h3>
      <p>Describe the feature here.</p>
    </div>
  </section>
  
  <section class="block block-3">
    <div class="block-3-image">
      <!-- Add your large image here -->
    </div>
  </section>


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

<?php get_sidebar(); ?>
<?php get_footer(); ?>