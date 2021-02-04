<?php
session_start();
include "config/config.php";
spl_autoload_register(function($className){
    
    include "classes/$className.php";

});


?>