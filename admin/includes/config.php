<?php 
// DB credentials.
define('DB_HOST','buxljcgpz1vtvlqk1fcd-mysql.services.clever-cloud.com');
define('DB_USER','uq0fxcekwbtkmffk');
define('DB_PASS','RNHK52eU1DOSH7Zzb0RZ');
define('DB_NAME','buxljcgpz1vtvlqk1fcd');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
