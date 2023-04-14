<?php
/* Template Name: Projects */

get_header();
?>

<main class="projects-container">
    
<div class="project">
  <h3 class="project-title">
    Project Title 1
  </h3>
  <p class="project-description">A short description of the project goes here.</p>
  <img src="<?php echo get_template_directory_uri(); ?>/images/golden.png" alt="Golden Retriever" class="project-image" />
</div>
 
<div class="project">
  <h3 class="project-title">
    Project Title 2
  </h3>
  <p class="project-description">A short description of the project goes here.</p>
  <img src="<?php echo get_template_directory_uri(); ?>/images/golden.png" alt="Golden Retriever" class="project-image" />
</div>

<div class="project">
  <h3 class="project-title">
    Project Title 3
  </h3>
  <p class="project-description">A short description of the project goes here.</p>
  <img src="<?php echo get_template_directory_uri(); ?>/images/golden.png" alt="Golden Retriever" class="project-image" />
</div>

<!-- Add more projects as needed -->
</main>

<?php get_footer(); ?>
