<?php
include_once "samdb.class.php";

use Shakib\SAMDb;

$samdb = new SAMDb(""); // Enter You API Token

var_dump($samdb->ip("103.25.249.226"));
