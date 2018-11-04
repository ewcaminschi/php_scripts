<?php
// Conectare la baza de date in modul cel mai simplu posibil

//$db_user = 'localhost';
//$db_users = 'root';
//$connection = mysqli_connect('localhost', 'root', 'Visual09', 'cms');


/*Conectare la baza de date utilizand un array si transformand variabilele in
constante pentru a avea o securitate mai mare a scriptului
*/
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "Visual09";
$db['db_name'] = "cms";

foreach($db as $key => $value){
  define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/* if($connection){
  echo "We are connected.";
} */
?>