
## About Task

Required to build user authentication and authorization service


## Run Project
- git clone **(https://github.com/fatmaabdelrahman/auth_service.git)**
- composer update 
-create .env file
- copy .env example file in .env and set database name and password 
- run command php artisan key:generate
- php artisan config:cache
- php artisan migrate
- php artisan db:seed
- php artisan serve
- open it in browser
- login Credentials (Super Admin)
  - email :admin@admin.com
  - password : 123456
  - login Credentials (un authorize User)
  - email : task@fatura.com
  - password : 123456
- **[Api collection ](https://www.getpostman.com/collections/3fb80fc96a9f9f2528b8)**


## Documentations Used In task

- **[laravel Documentation](https://laravel.com/docs/8.x)**
- **[Spatie For Roles and Permissions](https://spatie.be/docs/laravel-permission/v4/introduction)**
- **[Laravel Breeze ](https://laravel.com/docs/8.x/starter-kits)**
- **[laravel-jsvalidation](https://github.com/proengsoft/laravel-jsvalidation)**
- **[jWT](https://jwt-auth.readthedocs.io/en/develop/laravel-installation/)**
- **[Laravel DataTables](https://yajrabox.com/docs/laravel-datatables/master/installation)**



