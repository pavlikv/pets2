<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 1/18/18
 * Time: 10:30 AM
 */

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//set debug level
$f3->set('DEBUG', 3);

//define a default route
$f3->route("GET /", function() {
    echo '<h1>Routing Demo</h1>';
}
);

//run Fat-Free
$f3->run();