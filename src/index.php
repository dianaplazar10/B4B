<?php

require 'vendor/autoload.php';
// Initializes with the <APPLICATION_ID>, <REST_KEY>, and <MASTER_KEY>
ParseClient::initialize( "8IbiEQbsKQEFjPdeRdf5HpMubXBYURgBs3czh3Bj", "YY8gGmxEmN2WjFif6c02iP5tEIT1tZi56g0GwG1E", "9t0hCq0ZFv2RxdCXGevyek6We95BaW67FJrXMfkV" );
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