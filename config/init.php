<?php 
 

require_once 'config.php';

function my_autoloader($class_name) {
    include 'classes/' . $class_name . '.php';
}

spl_autoload_register('my_autoloader');
