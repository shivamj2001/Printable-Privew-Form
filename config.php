<?php
define('DBNAME','tutorials');
define('DBUSER','root');
define('DBPASS','');
define('DBHOST','localhost');

try{
    $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Your page is connected with database successfully..";    
}
    catch(PDOExeption $e) {
        echo "Issur -> Connection failed: " , $e->getMessage();
    }
?>