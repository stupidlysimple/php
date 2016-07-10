# Damn Stupid Simple PHP Framework

[![Join the chat at https://gitter.im/damnstupidsimple/framework](https://badges.gitter.im/damnstupidsimple/framework.svg)](https://gitter.im/damnstupidsimple/framework?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[![Version](https://badge.fury.io/gh/damnstupidsimple%2Fframework.svg)](https://badge.fury.io/gh/damnstupidsimple%2Fframework)
[![Build](https://api.travis-ci.org/damnstupidsimple/framework.svg)](https://travis-ci.org/damnstupidsimple/framework)
[![Total Downloads](https://poser.pugx.org/damnstupidsimple/framework/downloads)](https://packagist.org/packages/damnstupidsimple/framework)
[![composer.lock](https://poser.pugx.org/damnstupidsimple/framework/composerlock)](https://packagist.org/packages/damnstupidsimple/framework)
[![License](https://img.shields.io/:license-mit-blue.svg)](https://github.com/damnstupidsimple/framework/blob/master/LICENSE)
[![Made In](https://img.shields.io/badge/made%20in-Malaysia-red.svg)](https://www.google.com/search?q=malaysia)

Damn Stupid Simple is a micro framework built for lazy developers. Suitable for those who used to develop vanilla projects, while following today's set of standard. The core is very small in size, yet it contains most of the functions required to rapidly start developing a project. The name itself is obvious.

> New programmers have to take extra effort to learn 
> everything about modern PHP frameworks like Laravel and Symphony. Most 
> of the time were spent on documentations rather than the actual codes.
> This leads to the development of Damn Stupid Simple, as the surface of
> every terminologies, and the entry level to modern day needs. 
> Damn Stupid Simple is hybrid, and it's all you need to start grasping
> modern framework styles. It is everything you need to run from small to large-scale projects.

Latest Version
----
Release 0.1.0

### Table of Contents
| No | Title                                              |
|----|----------------------------------------------------|
| 1  | [Why Damn Stupid Simple?](#why-damn-stupid-simple) |
| 2  | [Technical Features](#technical-features)          |
| 3  | [How to Install](#installation)                    |
| 4  | [Basic Application](#basic-application)            |
| 5  | [API Documentation](#api-documentation)            |


Why Damn Stupid Simple
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
Damn Stupid Simple requires PHP at least 5.6 to run (with PHPUnit). 

##### 1. Install via Composer; or

**Notice:** You can also follow this page for clearer instructions: 
[damnstupidsimple.github.io](https://damnstupidsimple.github.io/how-to-install.html)

If you do not have Composer installed, please follow [this link](https://getcomposer.org/doc/00-intro.md#using-the-installer) for Windows, or [this link](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable) for Mac Os X and Linux.

As soon as you have installed the Composer already, type this on the Command Prompt (or Terminal)
```sh
$ C:\wamp64\www>composer create-project damnstupidsimple/framework myproject --no-dev
```

##### 2. Install via Zip/Tarball File:
Simply go to the [Releases page](https://github.com/damnstupidsimple/framework/releases) to download .zip or .tar file for Damn Stupid Simple framework.

[[back to top]](#table-of-contents)

Basic Application
----
```php
<?php
// All of the core classes are in this namespace
namespace Core;

// Define the root directory
define('DSS_PATH', __DIR__ . '/');

// Require Composer's fantastic autoloader to load 3rd party packages
require_once(DSS_PATH.'app/autoloader.php');

// Lazy routing
Router::get('/(:any)', function() {
	Viewer::file('home.php');
});

// Dispatch the router and done
Router::dispatch();
?>
```

[[back to top]](#table-of-contents)

API Documentation
----
If you wish to see the Core files, please go to <a href="https://github.com/damnstupidsimple/core">damnstupidsimple/core</a>

Table of contents

| No | Class         | Contents |
|----|---------------|----------|
| 1  | Core\Router   | <ul><li>[Basic Routing](https://github.com/damnstupidsimple/framework/wiki/Core%5CRouter)</li><li>[Routing Parameters](https://github.com/damnstupidsimple/framework/wiki/Core%5CRouter#routing-parameters)</li><li>[Route Controllers](https://github.com/damnstupidsimple/framework/wiki/Core%5CRouter#route-controller)</li></ul> |
| 2  | Core\Viewer   | <ul><li>[Viewer](https://github.com/damnstupidsimple/framework/wiki/Core%5CViewer)</li></ul>         |
| 3  | Core\App      | <ul><li>[Linking a variable / object to the App Container](https://github.com/damnstupidsimple/framework/wiki/Core%5CApp)</li></ul>         |
| 4  | Core\Sharer   | <ul><li>[The Sharer](https://github.com/damnstupidsimple/framework/wiki/Core%5CSharer)</li><li>[Sharing and getting variables](https://github.com/damnstupidsimple/framework/wiki/Core%5CSharer#sharing-and-getting-variables)</li></ul>         |
| 5  | Core\Database | <ul><li>[Configure the Database](https://github.com/damnstupidsimple/framework/wiki/Core%5CDatabase)</li><li>[Basic database queries](https://github.com/damnstupidsimple/framework/wiki/Core%5CDatabase#raw-queries)</li><li>[Query Builder](https://github.com/damnstupidsimple/framework/wiki/Core%5CDatabase#query-builder)</li><li>[Selects](https://github.com/damnstupidsimple/framework/wiki/Core%5CDatabase#selects)</li><li>[Joins](https://github.com/damnstupidsimple/framework/wiki/Core%5CDatabase#joins)</li><li>[Models](https://github.com/damnstupidsimple/framework/wiki/Core%5CDatabase#models)</li></ul>         |
| 6  | Core\Cache    | <ul><li>[Caching](https://github.com/damnstupidsimple/framework/wiki/Core%5CCache)</li></ul>         |
| 7  | Core\Debugger | <ul><li>[Error handling](https://github.com/damnstupidsimple/framework/wiki/Core%5CDebugger)</li></ul>         |

[[back to top]](#table-of-contents)

Development
----
Want to contribute? Great! Please do not hesitate to contribute to the framework development.

[[back to top]](#table-of-contents)

License
----
MIT

[[back to top]](#table-of-contents)

Todo
----
This is a work in progress. The README.md will be expanded from time to time.

[[back to top]](#table-of-contents)
