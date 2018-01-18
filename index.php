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
    $template = new Template();
    echo $template->render('views/home.html');
}
);
$f3->route("GET /pets/order", function(){
    $template = new Template();
    echo $template->render('views/form1.html');
}
);
$f3->route("GET /pets/order2", function(){
    $template = new Template();
    echo $template->render('views/form2.html');
}
);

$f3->route("GET /pets/results", function(){
    $template = new Template();
    echo $template->render('views/results.html');
}
);
$f3->route("GET /show/@pet", function($f3, $params) {

    switch ($params['pet']) {
        case 'dog':
            echo "<img src=\"https://www.nationalgeographic.com/content/dam/animals/thumbs/rights-exempt/mammals/d/domestic-dog_thumb.jpg\">";
            break;
        case 'cat':
            echo "<img src=\"https://www.petmd.com/sites/default/files/petmd-cat-happy-10.jpg\">";
            break;
        default:
            $f3->error(404);
    }
}
);

//run Fat-Free
$f3->run();