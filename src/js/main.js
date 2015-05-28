(function($) {

  'use strict';

  $(function() {
    $('.then-and-now').each(function(i, el) {
      console.log(el);
      $(el).twentytwenty();
    });
  });

}(jQuery));
