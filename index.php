<html>
 <head>
  <title>PHP Deploy Test OCP</title>
 </head>
 <body>
 <?php echo '<p>HELLO BANOBRAS</p>'; ?> 
 <img src="./logo.jpg" alt="Descripción de la imagen">
 
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