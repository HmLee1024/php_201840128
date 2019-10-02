<?php
session_start();
$_SESSION["username"] = "대남이";

setcookie("mynum","201840128",time()+(86400),"/"); 
//쿠키변수명, 쿠키 값,time()+(86400)만큼 보관하겠다.,현재도메인