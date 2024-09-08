<?php 
require 'vendor/autoload.php';
ParseClient::initialize( "zBYDXMfPx8ArjqWttOX9G2Vx0pdsvK4U3t7dN4Va", "VIdmRLrOoMq6jDS3aQiq6CZ7m6Xp96TmMmjKoWF9", "A2lDwdvyo5yXwmHOkFO85C2HUbPaOnW6MRwreIaD" );
ParseClient::setServerURL('https://parseapi.back4app.com', '/');
use Parse\ParseException;
use Parse\ParseObject;

$myCustomObject = new ParseObject("orders");

$myCustomObject->set("order_id", "1");
$myCustomObject->set("item_name", "Pen");
$myCustomObject->set("name", "Jinoy");


try {
  $myCustomObject->save();
  echo 'New object created with objectId: ' . $myCustomObject->getObjectId();
} catch (ParseException $ex) {
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}



?>