<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

### Installation

Project requires [Composer](https://getcomposer.org/) to run.

1.Clone this repository
```sh
$ git clone git@github.com:Adsumushero/laravel-shorturl.git
```
2.Install dependencies
```sh
composer install
```
3.Cope env.example to env 

4.Generate app key
```sh
php artisan key:generate
```
5.Insert key in .env


###Commands

To quickly fill the table with data, use the command:

```sh
php artisan generate:url {int}
```
where {int} is an integer value number of links
