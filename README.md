#[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)
bootUnderscores
===

Hi. I'm a starter theme called `bootUnderscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

## Starter Theme + HTML Framework = WordPress Theme Framework

The _s theme is a good starting point to develop a WordPress theme. But it is “just” a raw starter theme. That means it outputs all the WordPress stuff correctly but without any layout or design.
Why not add a well known and supported layout framework to have a solid, clean and responsive foundation? That’s where Bootstrap comes in with Material Design for Bootstrap.


Getting Started
---------------

## Basic Features

- Combines Underscore’s PHP/JS files and Bootstrap’s HTML/CSS/JS.
- [Font Awesome](http://fortawesome.github.io/Font-Awesome/) integration (v5.6.0)
- Jetpack ready.
- WooCommerce support.
- Contact Form 7 support.
- Translation ready.

## Installation

Download `bootunderscores` from GitHub. The first thing you want to do is copy the `bootunderscores` directory and change the name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'bootunderscores'` (inside single quotations) to capture the text domain.
2. Search for `bootunderscores_` to capture all the function names.
3. Search for `Text Domain: bootunderscores` in `style.css`.
4. Search for <code>&nbsp;bootunderscores</code> (with a space before it) to capture DocBlocks.
5. Search for `bootunderscores-` to capture prefixed handles.

OR

1. Search for: `'bootunderscores'` and replace with: `'megatherium-is-awesome'`
2. Search for: `bootunderscores_` and replace with: `megatherium_is_awesome_`
3. Search for: `Text Domain: bootunderscores` and replace with: `Text Domain: megatherium-is-awesome` in `style.css`.
4. Search for: <code>&nbsp;bootunderscores</code> and replace with: <code>&nbsp;Megatherium_is_Awesome</code>
5. Search for: `bootunderscores-` and replace with: `megatherium-is-awesome-`

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.




## Developing With npm, Gulp and SASS and [Browser Sync][1]

### Installing Dependencies
- Make sure you have installed Node.js and Browser-Sync (optional) on your computer globally
- Then open your terminal and browse to the location of your UnderStrap copy
- Run: `$ npm install`

### Running
To work with and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpfile.js`:
```javascript
{
    gulp.task('browserSync', function(){
        browserSync.init({
            proxy:'http://localhost/wpthemedev/', // <----- CHANGE HERE
            "notify": false
        })
    });
    ...
};
```
- then run: `$ gulp watch`

## Footnotes

[1] Visit [http://browsersync.io](http://browsersync.io) for more information on Browser Sync

Licenses & Credits
=
- Font Awesome: http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
- Bootstrap: http://getbootstrap.com | https://github.com/twbs/bootstrap/blob/master/LICENSE (Code licensed under MIT documentation under CC BY 3.0.)
and of course
- jQuery: https://jquery.org | (Code licensed under MIT)
- WP Bootstrap Navwalker by Edward McIntyre: https://github.com/twittem/wp-bootstrap-navwalker | GNU GPL
- Material Design for Bootstrap: https://mdbootstrap.com/


