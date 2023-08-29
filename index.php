<html>
 <head>
  <title>PHP Deploy Test OCP</title>
 </head>
 <body>
 <?php echo '<p>HELLO BANOBRAS</p>'; ?> 
 <img src="./logo.jpg" alt="Descripción de la imagen">
 <button id="logButton">Enviar console log</button>

    <script>
        // Obtener una referencia al botón
        var logButton = document.getElementById("logButton");

        // Agregar un evento click al botón
        logButton.addEventListener("click", function() {
            // Imprimir mensaje en la consola del navegador cuando se hace clic en el botón
            console.log('Mensaje enviado desde el botón.');
        });
    </script>


 </body>
</html>