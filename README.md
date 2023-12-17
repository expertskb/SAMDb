# SAMDb API
SAMDb API is movie database, ip database and google drive file information free provider Website.

# Usage

include_once "class/samdb.class.php";

use Shakib\SAMDb;

$samdb = new SAMDb(""); // Enter You API Token

IF YOU WANT SEE GOOGLE DRIVE FILE INFO, IP DATABASE INFO & MOVIE INFO DATABASE THEN USE

var_dump($samdb->gdinfo("18pKPRRSPnDbeL82pEa-Zatovn6iWLuCF"));

then return

object(stdClass)#3 (6) { ["name"]=> string(18) "Free Palestine.jpg" ["mimeType"]=> string(10) "image/jpeg" ["thumbnailLink"]=> string(163) "https://lh3.googleusercontent.com/drive-storage/ANtge_FaoINwa5gYlfaXB_qWXw2rUeh03Xb9EPtDYnVjqeTj-5iMMYaxq8don5DyoAkONQHmPoQL96iBqug9J5KB4OPbXYL1LRs6tbm3UJUj5Q=s220" ["fileExtension"]=> string(3) "jpg" ["md5Checksum"]=> string(32) "5b8f7da7061ce56ec222a837e90583da" ["size"]=> string(5) "34776" }
