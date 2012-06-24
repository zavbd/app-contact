<?php
include_once('core/config.php');
require 'core/autoloader.php';
require 'core/exceptions/exceptions.php';
session_start();

print_r($_GET);
$emailValidator = new EmailValidator('zav@abc');
// validate the supplied value 

if (!$emailValidator->validate()) 

{ 

    echo $emailValidator->getFormattedError(); 

    /* 

    displays the following 

    The value alejandrodomain.com is incorrect. Please enter a valid email address.. 

      */ 

} 

else 

{ 

    echo ' The data that you entered is correct.'; 

} 


exit;
/*lib::setitem('controller', new controller($_GET['u']));
$view = new view();
register_shutdown_function(array($view, "destroy"));
lib::getitem('controller') -> render();
$content = $view -> finish();

echo view::show('shell', array('body' => $content));*/
