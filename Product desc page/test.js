$(document).ready(function() {
 
  $('.color-choose input').on('click', function() {
      var Color = $(this).attr('data-image');
 
      $('.active').removeClass('active');
      $('.left-column img[data-image = ' + Color + ']').addClass('active');
      $(this).addClass('active');
  });
 
});