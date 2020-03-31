<?php

// require 'flight/index.php';

require 'vendor/autoload.php';

Flight::route('/', function(){
    echo 'hello world!';
    exit;
});

Flight::route('GET /users', function () {
    echo 'a list of users';
  });

Flight::route('POST /users', function () {
echo 'new user created';
});

Flight::route('GET /users/@id', function ($id) {
    echo 'fetching details for user with id: ' . $id;
});

// It's the same for all other HTTP methods
Flight::route('PUT /users/@id', function ($id) {
    echo 'updating user with id: ' . $id;
});
  
Flight::start();