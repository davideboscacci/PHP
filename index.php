<?php
include "header.html";
?>
<!doctype html>
    <html lang="en">
      <head>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
      </head>
    
      <body class="text-center">
        <form class="form-signin">
        <img class="mb-12" src="images/logo.png" alt="" width="100%" height="45%" style="border:none;position:relative;">
          
        <h1>Inserisci nome e cognome</h1>
        <div class='opzioni'>
          <select id="selectGuests" style="width:300px; font-family:arial" onChange="verificaSelezione(value)">
          <!-- Dropdown List Option -->
          </select>
        </div>
	<h3 style="padding:10px">oppure:</h3>
        <a href="/immagini.php">Vedi tutte le foto</a>
        </form>
      </body>
    </html>

    <script>
	$(document).ready(function() {
        $.get("/invitati.php", function(data) {
          valori_select =[""]
        $.each(JSON.parse(data), function (key, value) {
            valori_select.push(value.nome);
        });
				$("#selectGuests").select2({
				  data: valori_select
				});
			})});

      function verificaSelezione(nominativo){
        window.location.href="/immagini.php?n="+nominativo
      }
    </script>

