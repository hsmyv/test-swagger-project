# Test Swagger Project

This project provides API documentation using Swagger in a Laravel application.


Installation
Clone the repository:


git clone https://github.com/hsmyv/test-swagger-project.git
cd test-swagger-project


 
Install dependencies:
Run the following command to install the required packages:
composer install



Set up the environment file:
Copy the .env.example file to .env and update the necessary environment variables like database credentials.



Generate application key:
php artisan key:generate



Migrate the database (if necessary):
php artisan migrate



php artisan l5-swagger:generate
API Documentation
http://localhost/api/documentation
