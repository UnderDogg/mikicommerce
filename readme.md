[![StyleCI](https://styleci.io/repos/48767861/shield?branch=master)](https://styleci.io/repos/48767861) [![PPM Compatible](https://raw.githubusercontent.com/php-pm/ppm-badge/master/ppm-badge.png)](https://github.com/php-pm/php-pm)

## INNOVATE Ecommerce Framework, Currently 0.1.5



### Introduction
.


### Requirements
---------------------
.
                
### Optional
-------------------------

- If you want a better page load and overall improvement in speed , the Framework comes with redis implementation out of the box.
  You can get Redis from [Redis Here] (http://redis.io/) follow instruction there
  For windows users you also have Redis Desktop [redisdesktop here ] (http://redisdesktop.com/download)
  remember you first have to install Redis to work with redis desktop
  
  Then you should set  CACHE_DRIVER on .env file to redis and 
  Fill this three with your redis info in .env file
                                  REDIS_HOST=127.0.0.1   <--- change it if you are not on localhost
                                  REDIS_PASSWORD=
                                  REDIS_PORT=6379


### Quick Installation
------------------------

Begin by creating a new project using the composer create command

```
composer create-project mikimaine/ecommerce yourprojectname
```
This will install all the required packages to your system including Laravel

After that rename .env.example to .env and fill your database credentials.

Then use these commands to install the database tables and there seed data

#### Generate Application key
```php
php artisan key:generate
```

#### Migration
```php
php artisan migrate
```

#### Seed the database
```php
php artisan db:seed
```

And that's it ! Start building awesome website

Documentation
-------------
.