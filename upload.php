<?php

if( $_POST["name"] ) {
  $m = new Mongo();
  $m->selectDB( "phpsite" )->getGridFS()->storeUpload( "name" );
  echo "Saved " . $_POST["name"]["name"] . "\n";
}
?>