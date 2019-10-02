<?php
//include "function11.php";
include "function11.php";//함수를 선언한다.
include "function11.php";//함수 중복 처리한다.

list($name,$num) = dealim("대림이",201840128);
// $name <--- $name[0]
// $num <--- $name[1]
//print_r($name);
echo $name . " = " . $num;