<?php
require __DIR__ . "/inc/bootstrap.php";
 
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// $uri = explode( '/', $uri );
//  print_r($uri);
// if (isset($uri) ) {
//     header("HTTP/1.1 404 Not Found");
//     exit();
// }
// print_r($uri);

 
require PROJECT_ROOT_PATH . "./controller/ProductController.php";
 
$objFeedController = new ProductController($_SERVER['REQUEST_METHOD'],$_REQUEST['id']);
// $strMethodName = $uri[3] . 'Action';
$objFeedController->listAction();
?>