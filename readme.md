
## The challenge 

The challenge was to build an API, picking a maximum of 3 capabillities from a list of possible choices (containing only retrievements) and to pick the 3 most important whilst also providing some basic unit tests. The time limit for the assignment was 3 hours.

## My Submission 

### What's Included   

It includes 3 routes, 3 controller, 3 unit tests and one request validation as well as the data files. 

* Controllers `app/Http/Controllers/`
    * CategoryController.php
    * UserController.php
    * AdvertController.php
* Routes/Endpoints File `routes/`
    * api.php
* Unit Tests `tests/Unit/`
    * AdvertTest.php
    * CategoryTest.php
    * UserTest.php
* Requests `app/Http/Requests/`
    * UserAuthRequest.php
* Data `database/data/`
    * categories.json
    * adverts.json
    * users.json

### Thought Process

My thought process initially was "what are the three most important things in the given list that the application should have to make the most of the three options?" I concluded that the app would most benefit from: 

1. All categories
2. All adverts
3. One user

It would be able to use this information to do essentially everything - by filtering the ads on the client, the app would be able to acquire results for all of a user's ads, all ads in a particular category, view a single ad and even just the users' most recent ones. Therefore I decided that these would be the most important capabillities to build in the time frame. 

### Tech Choice

I picked Laravel for this as it's the fasest way I could have got the project made, whilst also including some good security (SQL injection protection with Eloquent being one) out the box (although in this particular case I used json files as a data source and don't actually store any data - although realistically you'd likely have storage functionallity and it would go in a database! :)) Also Laravel is what I'm most comfortable with currently and met the language requirements for the challenge.

###### Quick Ending Note

Hi, thank you for reviewing my project 😄. Of course, if this was an actual project, it would include more functionallity, maybe used a database instead of using the json files as a data source, but this met the requirements of the project so why overcomplicate?😁 I did consider building more functioanallity as I had plenty of time left out of the 3 hours but, as the main assignment critera was to pick/build the most important capabillities, felt it may be a waste. I completed the project in around an 70 minutes (commit: b138eb9).  

## Setup Instructions

>  cp .env.example .env

>  composer install

>  php artisan key:generate

>  php artisan migrate --seed

>  cd [PROJECT DIRECTORY]

> ./vendor/bin/phpunit
