<?php
include_once "samdb.class.php";

use Shakib\SAMDb;

$samdb = new SAMDb("dKce5IU7jUqag7lwlslyc1xPEjQ8iSX2");

var_dump($samdb->ip("103.25.249.226"));
