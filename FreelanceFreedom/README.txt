# FreelanceFreedom

[![LaravelVersion](https://img.shields.io/badge/Laravel-8-f56857.svg?style=flat-square)](https://laravel.com/docs/8.x)
![PHPVersion](https://img.shields.io/badge/PHP-8-777BB4.svg?style=flat-square)

> **FreelanceFreedom is still in development and will continue to receive updates.**

FreelanceFreedom is a full CRUD enabled laravel application that allows you to create, read, update and delete listings for freelance positions. Additionally, extended access control features allow roles to be assigned and admistrator tasks to be undertaken.

## Features
- **User Registration:** Register and create your own account within the application and navigate the application with assigned access control limitations.
- **User Authentication & Validation:** Full login system implemented to authenticate and validate user login details.
- **Password Recovery System(WIP):** Using laravels authentication scafolding, there are plans to implement a password recovery system using registered emails.
- **Role Based Access Controls:** Admin & User role based access controls to allow users to edit and delete their own posts and not other users and allow admins to access extended features to manage the application (user management & listing management).
- **Browse Listings:** Using the "current listings" page you can browse pre-exisitng listings that other users have made.
- **Create Listings:** Create your own listings for other users to browse with your user_id linking your posts to your account. Additionally, the ckeditor widget has been implemented to give users additional tools to customise their listings.
- **Edit Listings:** Edit your live listings associated with your account.
- **Delete Listings:** Delete live listings associated with your account.
- **Written in [PHP](https://www.php.net/) and [Laravel 8](https://laravel.com/docs/8.x).**

## Screenshots
---
![screenshot](img/create_listing.png) | ![screenshot](img/new_listing.png) | ![screenshot](img/edit_listing.png) | ![screenshot](img/delete_listing.png) | ![screenshot](img/assoc_listings.png) | ![screenshot](img/admin_tools.png) | ![screenshot](img/manage_listings.png) | ![screenshot](img/manage_users.png)
|-|-|-|-|-|-|-|-|


## Requirements
* Apache ( [Xampp](https://www.apachefriends.org/download.html) / [Wamp](https://sourceforge.net/projects/wampserver/) )
* MySQL
* PHP >= 8.0
* [GitBash](https://gitforwindows.org/)
* [Laravel](https://laravel.com/docs/installation#server-requirements)
* [Composer](https://getcomposer.org/) & [npm](https://nodejs.org/en/download/)
* [Bootstrap CSS](https://getbootstrap.com/docs/4.0/getting-started/download/)
* [Laravel Collective](https://laravelcollective.com/)


## Quick Start
### Installation Instructions
---
1. Clone the repo
```
> git clone https://github.com/hudds-awp2021-cht2520/assignment-01-ajameslarner.git
```
2. Inside your terminal run the folllowing command
```
> composer install
```
3. Copy the .env.example to your .env file to set your global variables
```
> cp .env.example .env
```
4. Run the migrations to populate the database
```
> php artisan migrate --seed
```
5. Start your local host
```
> php artisan serve
```
You can access `http://localhost:8000` in your browser.

The migration will automatically generate an admin and a user account for you to use

   | Email             | Username | Password | Access       |
   |-------------------|----------|----------|--------------|
   | admin@example.com | admin    | password | Admin Access |
   | user@example.com  | user     | password | User Access  |

---
## Compiling assets

#### Using NPM
1. Run the following command in your terminal
```
> npm install
```
2a. Run the following command to compile your assets
```
> npm run dev
```
2b. Additionally you can run this command to compile assets on file save
```
> npm run watch
```
## Running Tests
This project has tests in-place to garuantee the functionality of various features this project has to offer, you can use the following commands to run these tests:
```
> php artisan test
```
or
```
./vendor/bin/phpunit
```
---
## Known Bugs
- Deleting a post with an image attached will not delete it from the storage folder

If you've found a problem in FreelanceFreedom feel free to [open a new issue](https://github.com/hudds-awp2021-cht2520/assignment-01-ajameslarner/issues/new) and let me know!

---

## Credits (APA Referencing)

- Mbere250. (2021). paginationlinks.blade.php. github.com. [Github Link](https://github.com/Mbere250/Simple-search-with-pagination-in-laravel-8/blob/master/resources/views/layouts/paginationlinks.blade.php)

- CKEditor.com. (2015, May 5). WYSIWYG HTML Editor with Collaborative Rich Text Editing. Retrieved 9 November 2021, from https://ckeditor.com/

- Hudderfield University. Retrieved 9 November 2021. https://media.glassdoor.com/sqll/764108/university-of-huddersfield-squarelogo-1397131798014.png

- Huddersfield University, Retrieved 9 November 2021. https://mba.reviews/wp-content/uploads/2018/07/University-of-Huddersfield.png

- Lorem Ipsum Generator. (2019, January 2). Lorem Ipsum. Retrieved 9 November 2021, from https://loremipsum.io/generator/

- Otto, M. J. T. (n.d.). Bootstrap. Getbootstrap. Retrieved 10 November 2021, from https://getbootstrap.com/

- Laravel - The PHP Framework For Web Artisans. (n.d.). Laravel. Retrieved 10 November 2021, from https://laravel.com/
---
## Additional Resources
- [Faker Syntax Library](https://fakerphp.github.io/)
- [Artisan Commands](https://laravel.com/docs/8.x/artisan)
- [Forms Syntax Library](https://laravelcollective.com/)
- [Boostrap Documentation](https://getbootstrap.com/docs/5.1/getting-started/introduction/)


## Author

👤 Anthony Larner
- LinkedIn: [ajameslarner](www.linkedin.com/in/ajameslarner)
- Twitter: [@ajameslarner](https://twitter.com/ajameslarner)
- Github: [@ajameslarner](https://github.com/ajameslarner)