<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$dbconn = pg_connect("host=localhost dbname=maid user=bsk password=marco123");
if ($dbconn) {
  pg_prepare($dbconn, "my_query", 'select * from matrimonio.link where lower(persone) LIKE $1');
	pg_execute($dbconn, "my_query", array("Joe's Widgets"));
  $link = pg_fetch_all(pg_execute($dbconn,"my_query", array("%".strtolower($_POST['nome'])."%")));
} else {
    echo "Errore nella connessione a PostgreSQL.";
}
?> <div class="images"> <?php
foreach($link as $l){
?>
	<img class="immagine" src=<?php echo("../images/".$l['nome']) ?> alt="" width="300" height="200">
<?php
        //echo("<img src='../images/".$l['nome']."'>");
}
?>
</div>
<div id="image-viewer">
  <span class="close">&times;</span>
  <img class="modal-content" id="full-image">
</div>



