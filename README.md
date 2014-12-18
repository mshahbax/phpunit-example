phpunit-example
===============

It's a simple example to understand the test driven development with phpunit.

## Server

*Requirements:*

Any PHP version which supports PHP_unit.

# Installation procedure

## Windows

Download composer and place the composer.phar file in the project root directory. Then run the command below.

php composer.phar install


After installing the dependencies you will see the "phpunit.bat" file in "vender\bin\phpunit.bat". Now open your command line and cd to root of your project e.g C:\wamp\www\phpunit-example. Run below command to run the unit tests.

vendor\bin\phpunit test\FileTest.php

You can copy the phpunit.bat file anywhere global and set the path into windows path variable to shorten the path of phpunit command. Then you can run the simple command.

phpunit test\FileTest.php



*Note*: You are welcome to contribute to help the beginners.:) 