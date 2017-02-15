# StupidlySimple Framework for PHP (HHVM Compatible)

Follow us on Facebook [https://www.facebook.com/stupidlysimpleframework]

[![Join the chat at https://gitter.im/stupidlysimpleframework](https://badges.gitter.im/stupidlysimple/php.svg)](https://gitter.im/stupidlysimpleframework?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[![PHP version](https://badge.fury.io/ph/stupidlysimple%2Fphp.svg)](https://badge.fury.io/ph/stupidlysimple%2Fphp) [![Build](https://api.travis-ci.org/stupidlysimple/php.svg)](https://travis-ci.org/stupidlysimple/php)
[![Total Downloads](https://poser.pugx.org/stupidlysimple/php/downloads)](https://packagist.org/packages/stupidlysimple/php)
[![composer.lock](https://poser.pugx.org/stupidlysimple/php/composerlock)](https://packagist.org/packages/stupidlysimple/php)
[![License](https://img.shields.io/:license-mit-blue.svg)](https://github.com/stupidlysimple/php/blob/master/LICENSE)
[![Made In](https://img.shields.io/badge/made%20in-Malaysia-red.svg)](https://www.google.com/search?q=malaysia)

StupidlySimple Framework is a micro framework built for lazy developers. Suitable for those who used to develop vanilla projects, while following today's set of standard. The core is very small in size, yet it contains most of the functions required to rapidly start developing a project. The name itself is obvious.

> New programmers have to take extra effort to learn 
> everything about modern PHP frameworks like Laravel and Symphony. Most 
> of the time were spent on documentations rather than the actual codes.
> This leads to the development of StupidlySimple, as the surface of
> every terminologies, and the entry level to modern day needs. 
> StupidlySimple is hybrid, and it's all you need to start grasping
> modern framework styles. It is everything you need to run from small to large-scale projects.

Latest Version
----
Release 0.4.0 (Release Notes)

### Table of Contents
| No | Title                                              |
|----|----------------------------------------------------|
| 1  | [Why StupidlySimple?](#why-stupidlysimple) |
| 2  | [Technical Features](#technical-features)          |
| 3  | [How to Install](#installation)                    |
| 4  | [Basic Application](#basic-application)            |
| 5  | [API Documentation](#api-documentation)            |


Why StupidlySimple
----
  - No nonsense
  - Follow your own style
  - Extremely extensible
  - Small in size
  - Lightning fast (<20 ms)

[[back to top]](#table-of-contents)

Technical Features
----
  - **Lazy Routing** - Route urls according to file names. Your /home will be redirected to home.php and so on. You can also route on specific uri, and/or forward them to a controller.
  - **Simple Templating Process** - Copy and paste any templates you downloaded to the root directory, and viola, it's up and ready. However, you can still manage template them however that suits your likings.
  - **Integrated with Composer** - Download thousands of packages available straight to your project.
  - **Integrated with Eloquent ORM** - Manage database records with no hassles. 
  - **Dependency Injection** - Minimize coupling and dependant on a single project. And provides easy access to objects and variables.
  - **Out-of-the-Box Error Handler** - We integrated the framework with [Whoops](https://filp.github.io/whoops/), error handler in a less painful way.

[[back to top]](#table-of-contents)

Installation
----
StupidlySimple requires PHP at least 5.6 to run (with PHPUnit). 

Tutorial for installation is available [[on our website]](https://stupidlysimple.github.io/how-to-install.html).

##### Install via Composer

**Notice:** You can also follow this page for clearer instructions: 
[stupidlysimple.github.io](https://stupidlysimple.github.io/how-to-install.html)

If you do not have Composer installed, please follow [this link](https://getcomposer.org/doc/00-intro.md#using-the-installer) for Windows, or [this link](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable) for Mac Os X and Linux.

As soon as you have installed the Composer already, type this on the Command Prompt (or Terminal)
```sh
$ composer create-project stupidlysimple/php myproject
```

or if you acquired the zip/tarball, issue this command on the Command Prompt (or Terminal)
```sh
$ composer update
```

Once the vendor file is created and all of the packages has been uploaded, you can now view the homepage and start programming. (Be sure to update the project always).

[[back to top]](#table-of-contents)

Basic Application
----
```php
<?php
// All of the core classes are in this namespace
namespace Core;

// Define the root directory
define('SS_PATH', __DIR__ . '/');

// Require Composer's fantastic autoloader to load 3rd party packages
require_once(SS_PATH.'app/autoloader.php');

// Lazy routing
Router::get('(:any)', function() {
	Viewer::file('home.php');
});

// Dispatch the router and done
Router::dispatch();
?>
```

[[back to top]](#table-of-contents)

API Documentation
----
Documentations are available on [the wiki page](https://github.com/stupidlysimple/php/wiki).

Note: If you wish to see the Core files, please go to <a href="https://github.com/stupidlysimple/core">stupidlysimple/core</a>

Development
----
Want to contribute? Great! Please do not hesitate to contribute to the framework development.

#### Nightly Builds
Introducing nightly builds: we are really committed to project that we decided to release nightly builds.

Nightly builds are released more often than the stable build. Eventually a nightly build will be converted to stable.

Developers are very recommended to create pull request under the nightly branch.

[[back to top]](#table-of-contents)

License
----
MIT

[[back to top]](#table-of-contents)

Todo
----
This is a work in progress. The README.md will be expanded from time to time.

[[back to top]](#table-of-contents)
