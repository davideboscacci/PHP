<?php
include("header.html");
?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<?php
$dbconn = pg_connect("host=localhost dbname=maid user=bsk password=marco123");
if ($dbconn) {
  pg_prepare($dbconn, "my_query", 'select * from matrimonio.link where lower(persone) LIKE $1');
  if($_GET['n']){
    $link = pg_fetch_all(pg_execute($dbconn,"my_query", array("%".strtolower($_GET['n'])."%")));
  }
   else{
    $link = pg_fetch_all(pg_execute($dbconn,"my_query", array("%%")));
  }
} else {
    echo "Errore nella connessione a PostgreSQL.";
}
?> 
<div class="container">
<div class="row"> <?php
foreach($link as $l){
?>
<div class="col-lg-4 col-md-4 col-xs-4 thumb">
	<img class="img-fluid" src=<?php echo("../images/".$l['nome']) ?> alt="">
</div>
<?php
}
?>
</div>
</div>
<div id="image-viewer">
  <span class="close">&times;</span>
  <img class="modal-content" id="full-image">
</div>



