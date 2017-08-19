# About
Taskpad is a simple Laravel app for keeping a list of tasks you wish to complete.

# Installation (Nanobox)
To get things working on Nanobox:
1. `git clone http://github.com/tomha/taskpad`
2. `cd taskpad`
3. `nanobox run` to setup
3. You may need to `cp .env.example .env && nanobox run php artisan 
key:generate`
4. `nanobox dns add local taskpad`
5. `nanobox run php artisan serve --host 0.0.0.0`
6. Visit Taskpad at taskpad:8000 on your browser of choice

# Tests (OUTDATED)
**Note:** This was how I did it under Homestead, I'm yet to sort this out for Nanobox.
There are a couple of basic unit tests which can be run like so:
1. Edit `.env` so that `DB_DATABASE=taskpad_testing`
2. Create a MySQL database `taskpad_testing`
3. Run `php artisan migrate`
4. Run the tests with `phpunit`

