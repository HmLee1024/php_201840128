<?php
//재귀함수

function recurtion($i){
    echo $i--."<br>";
    if($i>0){
        recurtion($i);
    }
}

recurtion(5);

