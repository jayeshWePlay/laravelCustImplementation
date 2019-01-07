<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Project

Project is created to demonstrate following points in custom implementation way.
- Controllers
- Models
- Middleware
- Facades
- Service Provider
- Eloquent
- Laravel validation
- Routes
- Blade with control statements
- Migrations

Use following instructions to set up the project. 

1. Clone / Download the repository
2. Go to the root directory of project and run "composer install"
3. Create database with the name "custImp" (You can change database name and set your preferred name in .env file)
4. Run "php artisan migrate" to set up the database. (Pages table will be populated with some data to fetch for service provider.)
5. Run "php artisan serve" to start the project.

Some more details :

1. Service provider demo is shown on home page with "NavigationServiceProvider"
2. After login, a facade implementation can be seen. Facade uses class "MyApp" from 'app\MyApp\' directory.
3. On dashboard, use provision to redirect to Tasks section. 
4. Tasks section has demonstration of validation, dependency injection, policies, blade with control statements, model, controller, middleware.
5. For dependency injection a Repository is used, that can be considered as additional implementation of service container.
6. In Database folder from root directory, migrations can be found.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
