<?php

// Get the database connection file
require_once 'library/connections.php';
// Get the acme model for use as needed
require_once 'model/acme-model.php';

// Get the array of categories
$categories = getCategories();

// Build a navigation bar using the $categories array
$navList = '<ul>';
$navList .= "<li><a href='/acme/index.php' title='View the Acme home page'>Home</a></li>";
foreach ($categories as $category) {
 $navList .= "<li><a href='/acme/index.php?action=".urlencode($category['categoryName'])."' title='View our $category[categoryName] product line'>$category[categoryName]</a></li>";
}
$navList .= '</ul>';

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

 switch ($action){
    case 'login':
      include '/mat18013-acme/view/login.php';
      break;
    case 'registration':
      include '/mat18013-acme/view/registration.php';
      break;
    default:
      include 'view/home.php';
}