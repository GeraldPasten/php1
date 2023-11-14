<html>
 <head>
  <title>PHP Deploy Test OCP</title>
 </head>
 <body>
 <?php echo '<p>HELLO BANORTE</p>'; ?> 
 <img src="./logo.png" alt="Descripción de la imagen" style="max-width: 100%; height: auto;">
 
 <button id="refreshButton">Refrescar página</button>

    <script>
        // Obtener una referencia al botón
    
        var refreshButton = document.getElementById("refreshButton");
   

         // Agregar un evento click al botón de refrescar
         refreshButton.addEventListener("click", function() {
            // Recargar la página
            location.reload();
        });
    </script>


 </body>
</html>