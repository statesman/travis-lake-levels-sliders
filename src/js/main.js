(function($) {

  'use strict';

  L.Icon.Default.imagePath = 'images';

  $(function() {
    $('div.then-and-now').each(function(i, el) {
      var $slider = $(this);
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

      var lat = $slider.attr('data-lat'),
          lng = $slider.attr('data-lng');
      if(typeof lat !== "undefined" && lat !== false) {
        var mapContainer = $slider.parent('.then-and-now-wrapper').find('.map');
        var loc = [Number(lat), Number(lng)];
        var map = L.map(mapContainer[0], {
          zoomControl: false,
          attributionControl: false,
          center: [30.4180681,-97.915767],
          zoom: 10
        });
        map.addLayer(L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));
        L.marker(loc).addTo(map);
      }
    });
  });

}(jQuery));
