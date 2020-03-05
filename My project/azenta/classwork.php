<?php
$dbhost = 'localhost';
$dbuname = 'root';
$dbpass = '';
$dbname = 'class_webdev_project';

$dbconn = mysqli_connect($dbhost, $dbuname, $dbpass, $dbname)

if(!$dbconn){
    die("Connection to DB is not avaliable5")
}