<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbconn = pg_connect("host=localhost dbname=maid user=bsk password=marco123");
$result = pg_query($dbconn,"select * from matrimonio.invitati order by nome");

echo json_encode(pg_fetch_all($result));

?>
