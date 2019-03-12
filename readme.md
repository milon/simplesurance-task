# Simplesurance Task

This is a simple API for Simplesurance. The problem description can be found [here](problem.pdf). This is a Laravel 5.8 project, so to run this project, you need to have the environment to run Laravel. More can be found [here](https://laravel.com/docs/5.8/installation#installation).

## Installation

Clone the project from github and `cd` into the project directory. Then run following commands-

```
composer install
cp .env.example .env
php artisan key:generate
```

Then change the database credentials to `.env` file. This projects assume you are using MySQL. After changing the Database credential, run following commands-

```
php artisan migrate
```

This will create the documents database table. The table has a id field as primary key and a body column as text type field to store all the documents.

If you want to seed your database with dummy data, run this command-

```
php artisan db:seed
```

This will add 500 column on your DB. Run as many time as you want to add more dummy data.

And finally to run the project, you can run `php artisan serve` to use the built in PHP server. But I recommend to use some dedicated server.

## API Endpoints

This application comes with 4 endpoints-

* `GET /api/document/{id}`
* `POST /api/document/{id}`
* `DELETE /api/document/{id}`
* `GET /api/search?q={query}`

The last one is used for searching. the `query` parameter can be a single value, or comma separated multiple values. The response is paginated. By default it will return 10 documents, but you can change it by passing `limit` as query parameter. To go to the second page of the same query, just pass `page={page_number}` as query parameter.

There is also a Postman [collection](Simplesurance%20Task.postman_collection.json) added to the project. You can just import it to Postman API client to test.

## Developer

Nuruzzaman Milon <br/>
contact@milon.im 
