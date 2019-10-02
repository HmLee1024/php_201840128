<?php

spl_autoload_register(function_exists($className)){
    echo $className;
    $filename = $className.".php";
    echo $filename;
    include $filename;

}