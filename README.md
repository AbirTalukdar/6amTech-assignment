# 6amTch Assignment
This Repository is used for assignment purpose.


## Getting Started

for test These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

What things you need to install the software and how to install them

```
Laravel
PHP 8.1+
mysql

```

### Installing


Execute this command one by one

```
 copy .env.example in a .env file
 composer install
 php artisan key:generate 

create folder under public/storage/images

 php artisan migrate:fresh --seed
 php artisan passport:install

 php artisan serve
```

For a little demo

## Running the tests

Using Postman for creating user

### create user token for create update and delete operation

-> (POST)localhost:8000/oauth/token

Headers
```
Accept : application/json
Content-Type : application/json
```

Body(put your details [Nb: password allows be 'secret' if you are using seed command] )
```
{
	"grant_type" : "password",
	"client_id" : "2",
	"client_secret" : "xZNRgxf0f6xFmS8CLxcxkioL7Yhgj9eKOhFxIhkj",
	"username" : "lkertzmann@example.org",
	"password" : "secret"
}
```
