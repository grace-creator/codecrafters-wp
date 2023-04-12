<footer>
<div class="footer-widgets">
    <?php dynamic_sidebar( 'footer-widgets' ); ?>
  </div>

    <p>© <?php echo date('Y'); ?> CodeCrafters. All rights reserved. Licensed under the GNU General Public License v2 or later.</p>
  </footer>
  <script>
  window.addEventListener("scroll", function() {
  const ghostImage = document.getElementById("ghost-image");
  const maxScroll = document.body.scrollHeight - window.innerHeight;
  const scrollPercentage = window.scrollY / maxScroll;
  const maxOpacity = 1;

  // Move the image down and decrease its opacity.
  ghostImage.style.transform = `translateY(${scrollPercentage * 100}%)`;
  ghostImage.style.opacity = maxOpacity - scrollPercentage;
});

  

</script>

  <?php wp_footer(); ?>
</body>
</html>
