# Bootstrap DateTimePicker for Bootstrap 4

> 100% Compatible with Bootstrap 4.3.1

This is a forked version of [`wgbbiao/bootstrap4-datetimepicker`](https://github.com/wgbbiao/bootstrap4-datetimepicker) which was a forked version of the original [Bootstrap 3 DateTimePicker by _Eonasdan_](https://github.com/Eonasdan/bootstrap-datetimepicker). We found that, the wgbbiao's version is not working in our BS4 environment. So we fixed some things.

Here we are serving only the necessary built files from the base repos for our use in BS4 environment. What we did is simple: [simply replaced the BS3 classes for collapsibles from `in` to `show`](https://github.com/technovistalimited/bootstrap4-datetimepicker/commit/c70bb0dc06fda11661a66b58225bba8029994710). And that's it. Without build system, we minified the JS with [javascript-minifier.com](https://javascript-minifier.com/).

We _did nothing_ in the CSS but removed the `standalone.css`.

We are serving the files under the `/build` directory and serving nothing else. You can follow any of the original versions if you need.

## Table of Contents

<!-- MarkdownTOC -->

- [Dependencies](#user-content-dependencies)
- [How to use](#user-content-how-to-use)
    - [Installation](#user-content-installation)
    - [Basic usage](#user-content-basic-usage)
- [Why din't we make a pull request?](#user-content-why-dint-we-make-a-pull-request)
- [Thanks](#user-content-thanks)

<!-- /MarkdownTOC -->


## Dependencies
- jQuery
- Bootstrap 4
- Moment JS ([Download](https://momentjs.com/downloads/moment.min.js))

## How to use
### Installation
- Bootstrap 4 CSS
- Bootstrap Datetimepicker CSS

In `<head>` load the stylesheets.
```html
<head>
    <!-- Bootstrap 4 CSS Here -->

    <link rel="stylesheet" type="text/css" href="assets/css/libs/bootstrap-datetimepicker.css">
</head>
```

- jQuery
- Moment JS
- Bootstrap Datetimepicker JS

Before `</body>` load the javascripts.
```html
    <!-- jQuery and Bootstrap JS with their dependencies here -->

    <script src="assets/js/libs/moment.min.js"></script>
    <script src="assets/js/libs/bootstrap-datetimepicker.min.js"></script>
</body>
```

### Basic usage
For the library methods and detailed documentation, please follow the original documentation here:<br>
[ORIGINAL DOCUMENTATION](http://eonasdan.github.io/bootstrap-datetimepicker/)

```javascript
jQuery(document).ready(function($) {
    if (window.jQuery().datetimepicker) {
        $('.datetimepicker').datetimepicker({
            // Formats
            // follow MomentJS docs: https://momentjs.com/docs/#/displaying/format/
            format: 'DD-MM-YYYY hh:mm A',
            
            // Your Icons
            // as Bootstrap 4 is not using Glyphicons anymore
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-check',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        });
    }
});
```
## Why din't we make a pull request?
Because the original Eonasdan's version is unmaintained for years. And we're in a rush, and did this in a mid-point of a project, so have not much time to go for a proper PR. :)

## Thanks
Thanks to [`Eonasdan`](https://github.com/Eonasdan) for the awesome library. Thanks to 非良 (`wgbbiao`) for their fork too. Thanks to [Camille Anelli's blog](https://www.camilleanelli.fr/datetimepicker-bootstrap4/) for the reminder about the icons.

----
<sup>TechnoVista Limited 20190909174850/sup>
