<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$dbconn = pg_connect("host=localhost dbname=maid user=bsk password=marco123");
if ($dbconn) {
  $link= pg_fetch_all(pg_query($dbconn,'select * from matrimonio.link;'));
} else {
    echo "Errore nella connessione a PostgreSQL.";
}
foreach($link as $l){
        echo $l['nome'];
}
?>




