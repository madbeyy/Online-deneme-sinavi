<?php

date_default_timezone_set('Europe/Istanbul');

try {

$db = new PDO("mysql:host=localhost;dbname=soru", "root", "");//soldaki

} catch ( PDOException $e ){

print $e->getMessage();
}

?>