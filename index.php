<?php

// Storing url from server REQUEST_URI.
$url = $_SERVER['REQUEST_URI'];
// Exploding url.
$urlArr = explode('/',$url);
$route = '';
if (strpos($urlArr[1],'?')) {
  $urlNew = explode('?',$urlArr[1]);
  $route = $urlNew[0];
}
else {
  $route = $urlArr[1];
}
// Routing to the required page.
switch ($route) {
  case '':
    require './home.php';
    break;
  case 'home':
    require './home.php';
    break;
}
