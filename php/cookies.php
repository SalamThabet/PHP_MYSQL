<?php

$name="userid";
$value="123123";
$exp = time()+(60+60+24+7);//second+min+day+week
setcookie($name,$value,$exp);
echo $_COOKIE['userid'];

// //delete cookie
// setcookie($name,NULL);
// setcookie($name,time()-60);