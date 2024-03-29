Object-oriented web technologies
=========================================

This repo is a part of the course MVC at BTH. 

We work with Symfony framework to learn about Object-oriented web technologies. This repo include the app dir of the Symfony skeleton.

Run your app local
------------------------

To run this app local go to the report/ directory in terminal and use comand:

```
php -S localhost:8888 -t public
```
tool bin/console
----------------------

The tool bin/console is a utility that can help develop and troubleshoot your application.

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
```
