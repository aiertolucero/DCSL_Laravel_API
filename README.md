# DCSL_API

## To run:
1. Create a `.env` file copy details from `.env.example`
2. Run `php artisan key:generate`
3. Create a database and match the .env DB details to your DB.
4. Run `php artisan migrate` to create the Phones table to your DB.
5. Run `php artisan serve` to serve the API in port 8000.

## API Authentication
When accessing the api routes you need to add `Basic-Token` to your header request with a value of `caramelmacchiato`.

You can change the token value in the `.env` file `BASIC_AUTH_TOKEN`
