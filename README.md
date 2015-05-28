Then and now template
=================================

## Of note: there is a tool

There is a Knight Center project [Juxtapose](http://juxtapose.knightlab.com/#create-new) that does this pretty easily. Might consider it.

## Back to the program

[![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)

This is a new then-and-now template for Statesman. It uses the [twentytwenty](https://github.com/zurb/twentytwenty) package from Zurb.

## Requirements

* Node.js
* Bower
* Grunt

## Setup

* Download the zip to your machine
* unzip it into the directory of your choosing

At this point, you should be able to view the content through a browser in your localhost, as all the necessary files are in:

* `dist/`: css and js files
* `assets/`: example images and other assets
* `index.php`: the content

To make your project dev ready:

```
$ npm install
$ bower install
$ grunt
```

Any change to files in `src` will require the grunt default task to update files in `dist/`.


## Usage

`index.php`: the only published viewing page in the project. There is a php array of meta tags at the top. It also utilizes files in `includes`.

`includes`: where partial files are stored for advertising and ads. The two files that need to be edited:

  * `project-metrics.inc`: where to set metrics.
  * `advertising.inc`: where to change advertising, FWIW
  * Update `assets/share.jpg` to something appropriate for your project.

`assets/`: where you put the photos and other assets you want in your sliders.

`src/js/`: JavaScript files that Grunt will concatenate, Uglify and save in `dist/scripts.js`

`src/css/`: `less` files that Grunt will transpile into CSS in `dist/style.css`

