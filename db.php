<?php
/* Database connection settings */
$host = 'repotest.database.windows.net';
$user = 'sjoshy';
$pass = '#Kottayam96';
$db = 'UserNameDB';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
