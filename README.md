# About
Taskpad is a simple Laravel app for keeping a list of tasks you wish to complete.

# Installation (Nanobox)
To get things working on Nanobox:
1. `git clone http://github.com/tomha/taskpad`
2. `cd taskpad`
3. `nanobox build-runtime`
4. `cp .env.example .env`
5. `nanobox run php artisan key:generate`
6. `nanobox run php artisan migrate`
7. `nanobox dns add local taskpad`
8. `nanobox run php artisan serve --host 0.0.0.0`
9. View at `taskpad:8000` in your browser - I used Firefox and havent tested CSS on other browsers.

# Tests (OUTDATED)
**Note:** This was how I did it under Homestead, I'm yet to sort this out for Nanobox.
There are a couple of basic unit tests which can be run like so:
1. Edit `.env` so that `DB_DATABASE=taskpad_testing`
2. Create a MySQL database `taskpad_testing`
3. Run `php artisan migrate`
4. Run the tests with `phpunit`

