<?php get_header(); ?>

<main>
<section class="block block-1">
    <div class="block-1-text">
      <h2>Welcome to my Minimalist Theme</h2>
      <p>This minimalist theme is designed to make your content shine. Its simplicity and clean design ensure that your users have an enjoyable experience navigating your website.</p>
    </div>
    <div 
    class="block-1-image" 
    id="ghost-image"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/golden.png');">
    </div>
  </section>
  
  <section class="block block-2">
    <div class="block-2-text">
      <h3>Responsive Design</h3>
      <p>A responsive design ensures that the theme adapts well to different screen sizes and devices, providing a seamless user experience across different devices.</p>
    </div>
    <div class="block-2-text">
      <h3>Customization Options</h3>
      <p>Users appreciate having control over various design elements, such as colors, fonts, layouts, and backgrounds.</p>
    </div>
    <div class="block-2-text">
      <h3>SEO Optimization</h3>
      <p>The theme includes the use of headings, clean and lightweight code, and fast loading times to improve search engine rankings.</p>
    </div>
  </section>
  
  <section class="block block-3">
    <div class="block-3-image"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/glas.png');">
    </div>
    <div class="block-3-text">
      <h3>Night Mode, Light Mode & Waggy Tail Mode</h3>
      <p>Introducing our three captivating minimalist WordPress themes, designed to provide a clean and clutter-free experience for your visitors while adding an adorable and engaging element – a lovable golden retriever!</p>
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

<?php get_footer(); ?>