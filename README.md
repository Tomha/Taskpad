# About
Taskpad is a simple Laravel app for keeping a list of tasks you wish to complete.

# Installation
This was my first time setting up Laravel, so my instructions may be a bit spotty
1. Setup a server with the requirements listed [here](https://laravel.com/docs/5.4/installation)
	- I did this by creating a [Homestead Virtual Machine](https://laravel.com/docs/5.4/homestead)
2. CD to your desired project directory
3. `git clone https://github.tom/tomha/Taskpad`
4. `composer install` (Requires composer)
5. Create a MySQL database called "taskpad", and one called "taskpad_testing" for unit tests
6. Copy `.env.example` to a file `.env` and set credentials/addresses for your database
7. `php artisan migrate`
8. Things *should* be setup, so use `php artisan serve` then visit the address for your server, `localhost:8000` in my case.

# Tests
There are a couple of basic unit tests which can be run like so:
1. Edit `.env` so that `DB_DATABASE=taskpad_testing`
2. Create a MySQL database `taskpad_testing`
3. Run `php artisan migrate`
4. Run the tests with `phpunit`

