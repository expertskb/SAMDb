# SAMDb API
SAMDb API is movie database, ip database and google drive file information free provider Website.

# Usage

include_once "class/samdb.class.php";

use Shakib\SAMDb;

$samdb = new SAMDb(""); // Enter You API Token

IF YOU WANT SEE GOOGLE DRIVE FILE INFO, IP DATABASE INFO & MOVIE INFO DATABASE THEN USE

var_dump($samdb->gdinfo("18pKPRRSPnDbeL82pEa-Zatovn6iWLuCF"));

then return

![Application](https://i.ibb.co/jGjdcCv/Screenshot-2023-12-17-130715.png)

Check ip.php and movie.php if you need movie info or ip info etc,
