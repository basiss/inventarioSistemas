

<?php
require_once('config.php');

#  Check database to host connection 
if(!function_exists('mysql_connect'))
{
    echo 'PHP cannot find the mysql extension. MySQL is required for run. Aborting.';
    exit();
}

$dbh = @mysql_connect($server, $username_mysql, $password_mysql)
or die('Error: Database to host connection: '.mysql_error());

mysql_select_db($database_mysql, $dbh)
or die('Error: Select database: '.mysql_error());


#echo "conectado"

?>

