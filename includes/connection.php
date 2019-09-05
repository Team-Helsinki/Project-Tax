<?php

$connection = mysqli_connect('localhost', 'root', '', 'tax_it');
if (!$connection){
    die("Database connection failed: " . mysqli_connect_error());
}