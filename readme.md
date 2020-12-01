# Video Plugin

A plugin for [Kirby 3 CMS](http://getkirby.com) to embed content from Vimeo without compromising privacy.

Forked from [schnti](https://github.com/schnti/kirby3-video).

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider

- [making a donation](https://www.paypal.me/schnti/5) or
- [buying a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/48194?link=1170)

## Installation

### Download

[Download the files](https://github.com/schnti/kirby3-video/archive/master.zip) and place them inside `site/plugins/video`.

### Composer

```
composer require schnti/video
```

### Git Submodule
You can add the plugin as a Git submodule.

    $ cd your/project/root
    $ git submodule add https://github.com/schnti/kirby3-video.git site/plugins/video
    $ git submodule update --init --recursive
    $ git commit -am "Add Kirby video plugin"

Run these commands to update the plugin:

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive
      

## CSS (SCSS)

```HTML
<link rel="stylesheet" href="plugins/video/src/vimeo.js">
```

or

```SCSS
@import "site/plugins/video/src/vimeo";
```

## JS

```HTML
<script src="site/plugins/video/src/vimeo.js"></script>
```

or

```JS
require('site/plugins/video/src/vimeo');
```

## How to use it

Use this kirbytag

```
(vimeo: g5BEXgNHZJU)
```