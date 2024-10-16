<?php

require 'vendor/autoload.php';
// Initializes with the <APPLICATION_ID>, <REST_KEY>, and <MASTER_KEY>
ParseClient::initialize( "RZ5AaWwIGOrtOHBitpTVf2Ynv4gMvGFg5gCkDMky", "wanGfBbnYdL8RXByZKTOfZ4eHQaZssg50oxinXDF", "kixOBHxnqjq7sVInsfLAPoN3L5Oc8hN7bmLraBiD" );
ParseClient::setServerURL('https://parseapi.back4app.com', '/');

// Create an object  - Start
use Parse\ParseException;
use Parse\ParseObject;

$myCustomObject = new ParseObject("Orders"); // Table name : Orders

$myCustomObject->set("order_id", "1");
$myCustomObject->set("item_name", "Ben One");
$myCustomObject->set("name", "Ben");

try {
  $myCustomObject->save();
  echo 'New object created with objectId: ' . $myCustomObject->getObjectId();
} catch (ParseException $ex) {
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}
// Create an object  - End

 ?>