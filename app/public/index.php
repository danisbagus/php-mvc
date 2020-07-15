<?php 

// start session
if ( !session_id() ) session_start();

// Call all needed file (Boostraping technique)
require_once '../application/init.php';     

$app = new App;