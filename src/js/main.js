(function($) {

  'use strict';

  $(function() {
    $('.then-and-now').each(function(i, el) {
      var $slider = $(el);
      $slider.imagesLoaded()
        .done(function() {
          $slider.twentytwenty();
          var images = $slider.children('img');
          $slider.find('.twentytwenty-before-label').attr('data-content', $(images[0]).attr('data-date'));
          $slider.find('.twentytwenty-after-label').attr('data-content', $(images[1]).attr('data-date'));
        })
        .fail(function() {
          $slider.parent().remove();
        });
    });
  });

}(jQuery));
