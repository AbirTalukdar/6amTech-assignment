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

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

I am using Postman u can use anyone like insomnia

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

## Break down into end to end tests

Flow below instraction for test your API 

### Get all products
```
(GET) http://localhost:8000/api/products
```

### Get single products
```
(GET) http://localhost:8000/api/products/1
```

### Create products
```
(POST) http://localhost:8000/api/products

Headers
Accept : application/json
Content-Type : application/json
Authorization : "put your user secret"

Body(put your details)

{
	"name" : "Iphone X",
	"description" : "Super Retina in two sizes — including the largest display ever on an iPhone. Even faster Face ID. The smartest, most powerful chip in a smartphone. And a breakthrough dual-camera system. iPhone XS is everything you love about iPhone. Taken to the extreme.",
	"price" : 10000,
	"stock" : 10,
	"discount" : 15
}
```

### Update product 
```
same as create only change request post to put
```

### Delete product
```
(DELETE) http://localhost:8000/api/products/2
also need some headers as like as product create 
```

