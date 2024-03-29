<!--
---
author: krbe23
revision:
    "2023-03-29": "(A, krbe23) First release" (alot copied from mos readme.md in this course...)
---
-->

![Symfony image](.img/symfony_icon.png)

Object-oriented web technologies
=========================================

This repo is a part of the course MVC at BTH. 

We work with Symfony framework to learn about Object-oriented web technologies. This repo is made from a Symfony skeleton.

Start up the webb app
------------------

To run this web app you need to "clone" this repo and the root directory at a place of your choice.

to run this local
----------------------

go to the directory MVC in your terminal.

Creates a Symfony web application.

```
composer create-project symfony/skeleton:"7.0.*" MVC
```

to start the PHP built-in server
```
php -S localhost:8888 -t public
```

You shold now be able to open a web brower and see the web-site at `http://localhost:8888`.



<!-- Get started
--------------

First you need too install PHP in the terminal.
Then you have to install Composer, the PHP package manager.

"Clone" this repo
-------------------

Copy this repo from github to the directory of your choice



Pakages
---------------

There are some pakages that you need to install to make everthing work.

First we have the Twig pakage

```
composer require twig
```

Then we have Encore to include CSS and Javascript

```
composer require twig
```

You should now be able to open your app with the PHP built-in web server to verify your installation

```
# You are in the app/ directory
php -S localhost:8888 -t public
```
You should now bw able to open a web browser and se the welcome page

```
http://localhost:8888
```

Good comands to remember for your terminal.
-----------------------------

Run your app local

Run app local go to root directory

```
php -S localhost:8888 -t public
```

tool bin/console
----------------------

The tool bin/console can help develop and troubleshoot your application.

Here are a few examples on how to use it.

```
# Show the routes
bin/console debug:router
```
```
# Match a specific route
bin/console router:match /lucky/number
```
```
# Clear the cache
bin/console cache:clear
```
```
# Show available commands
bin/console
``` -->
