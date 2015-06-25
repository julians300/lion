## Lion Responsive Framework

Lion is a front went framework that is very opinionated. I designed it to be a boilerplate framework to quickly get a design up without needing to use too much custom markup. The idea is to be very basic and semantic with the markup so that it can be customized later.

> **Note:** This is a work in progress and still needs some tweaking and more components to be a complete framework. I am adding more components as I need them. 

## Installation

Bower

The easiest way to to install with bower.

    bower install lion

Simply link lion.min.css in your head, and inlcude Lion.min.js before the closing body tag.

## Official Documentation

Documentation for the framework can be found on the [Lion](http://juliansalas.com/lion/docs).

## Gulp Commands

    gulp

The default gulp command runs the css and js functions. This compiles and minifies thee source files.

    gulp watch

The watch command runs the same css and js functions but also watches the files while you conitinue to work on them. 

### Change Log

## 1.0.1 - 2015-06-25

* enhancements
  * Removed the need of the 'column' and 'columns' classes within the grid for Cleaner markup.
  * Added responsive capabilities for buttons.
  * Changed class 'u-full-width' to 'full-width'

* Bug Fixes
  * Navigation nav element now requires 'nav' class to allow for more semantic markup.

* deprecations
  * removed standard button styles and replaced it with primary button styles. Removed primary button class.

### License

Lion framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).