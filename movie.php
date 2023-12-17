<?php
include_once "class/samdb.class.php";

use Shakib\SAMDb;

$samdb = new SAMDb(""); // Enter You API Token

var_dump($samdb->movie("tt0017925"));
