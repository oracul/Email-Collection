<?php

if( $_POST["email"] ) {
  $m = new Mongo();
  $m->selectDB( "phpsite" )->getGridFS()->storeUpload( "email" );
  echo "Saved " . $_POST["email"]["name"] . "\n";
}
?>