**Read in other languages: [Українська](README.md),
[English](README.en.md).**

This project was created with
[Laravel](https://laravel.com/).

## Starting the project

1. Clone this repository.  git clone https://github.com/KonovalovM/shop_laravel.git
2. Go to the project directory: cd shop_laravel
3. Install dependencies: composer install
4. Configure the .env file: There should be an .env.example file in the root directory of the project. Create an .env file based on this template: cp .env.example .env
   Open the .env file and configure the database connection options and other configurations according to your environment.
5. Create the database and run the migrations: Create the database you specified in the .env file. Then run the migrations to create the necessary tables: php artisan migrate
6. Fill the database with test data php artisan db:seed
7. Start the server: php artisan serve
   Typically, the server will be accessible at http://localhost:8000
8. Check the project in the browser:
   Open your web browser and go to [http://localhost:8000](http://localhost:8000) to check if everything is working correctly.
