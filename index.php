<?php

require './includes/configs/Configs.php';
require './includes/classes/Connection.php';

//Class instance object
$connect = new Connection();
//Get connection || see Configs.php for more informations
$connect->connect();