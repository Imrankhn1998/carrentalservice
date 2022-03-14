<?php 
// DB credentials.

define('DB_HOST','bjp08r4b8d4evv8iblgx-mysql.services.clever-cloud.com');
define('DB_USER','ufjejjolhsn8sxay');
define('DB_PASS','yO5AKEKQ6cuMfD3t5A1A');
define('DB_NAME','bjp08r4b8d4evv8iblgx');
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
