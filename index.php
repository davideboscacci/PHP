<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">        
        <div class="col-12">
          <div class="text-center">
            <img src="../images/logo.jpg" style="width:100%;"> 
          </div>     
        </div>
  </div>
 <div class="row"><div class="col-12">
  <h2>inserisci il nome dell'invitato da cercare:</h2>
    <form  action="/immagini.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
     </div>
     <button type="submit" class="btn btn-primary">Cerca</button>
   </form>
  </div></div>
</body>
</html>


