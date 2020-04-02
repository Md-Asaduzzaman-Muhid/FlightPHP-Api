<?php
require 'flight/Flight.php';

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/hh/yy', function(){
    echo 'hello hhhhhdfhdhdyyyyyyy!';
});

Flight::start();
