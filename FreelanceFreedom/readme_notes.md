Xampp Installation Process
VirtualHost Installation Process
Git Bash Installation Process
Composer Installation Process
Node & NPM Installation Process
Boostrap Installation Process
LaravelCollective Installation Process (composer require laravelcollective/html)

Code Editor Setup
- Integrated Terminal
- Handy Extensions
- Cwd

Laravel Project Setup
- Env Variables (cp command)
- Migrate Tables
- Seed Tables
- Setup VirtualHost Xampp

Composer Commands
- Install Dependancies

Git Bash Commands
- git clone "link" "branch"
- 
- Naming Convetions
- Git Etiquette

PHP Artisan Commands
- Make
- Migrate
- db:Seed
- Route
- Tinker

Make
- php artisan make:controller "name"
- php artisan make:model "name" -m (m = migration)
- php artisan make:factory "name" --model="modelname"
- php artisan make:seeder "name"
- php aritsan make:route "name"

Migrate
- php artisan migrate (inserts tables)
- php artisan migrate:reset (resets database, removes tables)

db
- php artisan db:seed (seeds the database with faker info)

Tinker
- php artisan tinker (enter database editor in CLI)
- q (exit out)




Seeding the database (tinker)
- make:factory "factoryname" --model="relatedmodel" (consider naming convention)
- Add the faker details in the factory
- php artisan tinker
- \App\Models\Listing::factory()->count(NUMBER OF FAKERS)->create();
- q to exit out of tinker

Seeding the database (file)
- php artisan make:model "name" -m (< create migration file, inside migration)
- php artisan make:factory "name" model="model name" (has to be same tense name)
- Input faker values into the factory
- php artisan make:seeder "name"
- $this->call(SEEDERCLASSNAME::class); < inside the seeders main method
- php artisan db:seed


Faker Library
https://fakerphp.github.io/

Eloquent can be used to select from the database by simply calling the Listing class

OR

you can use SQL by doing:

$varname = DB::select('SELECT * FROM table');

ListingFactory, Listing Design & Pagination

Pagination Reference

Mbere250. (2021). paginationlinks.blade.php. github.com. https://github.com/Mbere250/Simple-search-with-pagination-in-laravel-8/blob/master/resources/views/layouts/paginationlinks.blade.php

- README BANNER GEN
https://laravelcollective.com/tools/banner

LaravelCollective for the forms needs crediting

CK EDITOR crediting CND

composer require laravel/ui

php artisan ui vue --auth

^ to install the authentication scafolding

Continue with access control

https://media.glassdoor.com/sqll/764108/university-of-huddersfield-squarelogo-1397131798014.png

huddersfield image reference

Make admin account

php artisan tinker
User::create([
    'name' => 'Admin',
    'email' => 'admin@example.com',
    'email_verified_at' => now(),
    'password' => bcrypt('password'),
    'user_role' => 'Admin'
]);

or done through seeding


set symlink between storage folder and the public folder

writing tests

> php artisan test

Access Controls + Admin Controls + Tests