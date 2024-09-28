# Test Swagger Project

This project provides API documentation using Swagger in a Laravel application.

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/hsmyv/test-swagger-project.git
    cd test-swagger-project
    ```

2. **Install dependencies:**

    Run the following command to install the required packages:

    ```bash
    composer install
    ```

3. **Set up the environment file:**

    Copy the `.env.example` file to `.env` and update the necessary environment variables like database credentials:

    ```bash
    cp .env.example .env
    ```

4. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5. **Migrate the database (if necessary):**

    ```bash
    php artisan migrate
    ```

6. **Generate Swagger documentation:**

    ```bash
    php artisan l5-swagger:generate
    ```

## API Documentation

You can view the API documentation at:

[http://localhost/api/documentation](http://localhost/api/documentation)
