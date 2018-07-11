## Lion Responsive Framework

Lion is a front went framework that is very opinionated. I designed it to be a boilerplate framework to quickly get a design up without needing to use too much custom markup. The idea is to be very basic and semantic with the markup so that it can be customized later.

> **Note:** This is a work in progress and still needs some tweaking and more components to be a complete framework. I am adding more components as I need them. Feel free to submit a pull request :)

## Installation

Bower

The easiest way to to install with bower.

    bower install lion

Simply link `lion.min.css` in your head, and inlcude `lion.min.js` before the closing body tag.

## Official Documentation

Documentation for the framework can be found on the [Lion Website](http://juliansalas.com/lion/).

### Customizing Build

Install packages via node package manager

	npm install

### Gulp Commands

    gulp

The default gulp command runs the css and js functions. This compiles and minifies the source files.

    gulp watch

The watch command runs the same css and js functions but also watches the files while you conitinue to work on them. 

### Customizations

Modify the `vars.less` file to change global colors and other settings to your liking.

## Copyright and license

Lion framework is open-sourced software licensed under the [MIT license](https://github.com/julians300/lion/blob/master/LICENSE).
