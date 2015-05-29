# Lake Travis then-and-now sliders

This is an adaptation of a regular then-and-now template, which uses the [TwentyTwenty](http://zurb.com/playground/twentytwenty) slider, to show 24 pairs of photos from Lake Travis before and after the Memorial Day floods. It's altered in a few key ways:

- it uses [imagesLoaded](https://github.com/desandro/imagesloaded) to determine when the images for the slider have loaded to *individually* fire up the `.twentytwenty()` plugin instead of `$(window).load()`
- sliders don't have to be individually specified; instead, they're selected and individually instantiated by a jQuery `.each()`
- TwentyTwenty's image labels, which are applied in CSS, are [overriden](https://github.com/statesman/travis-lake-levels-sliders/blob/521958536846c9eda2f878c5856407c04a7fcfd7/src/less/style.less#L15-L19) to be pulled from `data-` attributes on the images, which are [updated](https://github.com/statesman/travis-lake-levels-sliders/blob/521958536846c9eda2f878c5856407c04a7fcfd7/src/js/main.js#L14-L15) using jQuery
- there are Leaflet.js maps under each image
- the slider data lives in an [ArchieML file](src/data/photos.aml) that is JSON-ified and looped over in the PHP file

### Mobile & social considerations
- the graphic is built using our Bootstrap template, which is responsive
- the TwentyTwenty slider code is responsive and works with touch and mouse events
- the Leaflet maps resize and columns are rearranged on mobile and tablet for improved readability
- the page includes built-in buttons for social sharing

### Requirements
* Node.js
* Bower
* Grunt

### Development
```shell
$ npm install
$ bower install
```

### Deployment
```shell
$ grunt ftpush:prod
```

### Copyright
&copy; 2015 Austin American-Statesman
