

jQuery(document).ready(function ($) {
  
  
  $('#sidebar-toggle').on('click', function () {
    
    $('body').toggleClass('sidebar-visible');
  });
});