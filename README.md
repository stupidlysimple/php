# StupidlySimple Framework for PHP

Follow us on [Facebook](https://www.facebook.com/stupidlysimpleframework).

[![Chat with Discord](https://i.imgur.com/imbJExE.jpg)](https://discord.gg/EQ4w9Cs)

[![PHP version](https://badge.fury.io/ph/stupidlysimple%2Fphp.svg)](https://badge.fury.io/ph/stupidlysimple%2Fphp) [![Build](https://api.travis-ci.org/stupidlysimple/php.svg)](https://travis-ci.org/stupidlysimple/php) [![Style-CI](https://styleci.io/repos/62019007/shield?branch=master)](https://styleci.io/repos/62019007)  [![Scrutinizer-CI](https://www.scrutinizer-ci.com/g/stupidlysimple/php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/stupidlysimple/php/)  [![Total Downloads](https://poser.pugx.org/stupidlysimple/php/downloads)](https://packagist.org/packages/stupidlysimple/php)
[![composer.lock](https://poser.pugx.org/stupidlysimple/php/composerlock)](https://packagist.org/packages/stupidlysimple/php)
[![License](https://img.shields.io/:license-mit-blue.svg)](https://github.com/stupidlysimple/php/blob/master/LICENSE)
[![Made In](https://img.shields.io/badge/made%20in-Malaysia-red.svg)](https://www.google.com/search?q=malaysia)

StupidlySimple Framework is a micro framework built for lazy developers. 

Suitable for those who used to develop vanilla projects, while following today's set of standard. 

The core is very small in size, yet it contains most of the functions required to rapidly start developing a project. The name itself is obvious.

Latest Version
----
Release 0.4.0 (Release Notes)

### Table of Contents
| No | Title                                              |
|----|----------------------------------------------------|
| 1  | [Why StupidlySimple?](#why-stupidlysimple) |
| 2  | [Technical Features](#technical-features)          |
| 3  | [How to Install](#installation)                    |
| 4  | [API Documentation](#api-documentation)            |


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
  - **Simple Templating Process** - Copy and paste any templates you downloaded to the root directory, and viola, it's up and ready. You can still manage template them however that suits your likings.
  - **Integrated with Composer** - Download thousands of packages available straight to your project.
  - **Integrated with Eloquent ORM** - Manage database records with no hassles. 
  - **Dependency Injection** - Minimize coupling and dependant on a single project. And provides easy access to objects and variables.
  - **Out-of-the-Box Error Handler** - We integrated the framework with [Whoops](https://filp.github.io/whoops/), error handler in a less painful way.

[[back to top]](#table-of-contents)

Installation
----
StupidlySimple requires PHP at least 5.6 to run (with PHPUnit). 

Tutorial for installation is available [on our website](https://stupidlysimple.github.io/generic.html).

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

[Get nightly builds](https://github.com/stupidlysimple/php/wiki/Nightly-Builds)

[[back to top]](#table-of-contents)

License
----
MIT

[[back to top]](#table-of-contents)

Todo
----
This is a work in progress. The README.md will be expanded from time to time.

[[back to top]](#table-of-contents)
