<?php

session_start();

//Destroy Session
session_destroy();

//Redirect to login page
header('Location: login.html');

?>