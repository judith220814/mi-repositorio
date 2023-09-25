<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Datos </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="dive">
    <h1>Captura de Datos Personales</h1>
    <br>
    <h2>Ingresa los datos que se te piden </h2>
    <br>
    <p>Mi Primera Encuesta</p>
    <hr>
    <form action="resultados.php" method="POST">
    <label for="Name">Nombre</label>
    <input type="text" id="Name" name="Name"value="Ingresa tu nombre"/>
    <hr>
    <label for="Age">Edad</label>
    <input type="number" id="Age" name="Age"value="Ingresa tu Edad"/>
    <hr>
    <label for="City">Ciudad donde Vives</label>
    <input type="text" id="City" name="City"value="Ingresa la Ciudad "/>
    <hr>
    <label for="Hobby">Pasatiempos Favorito</label>
    <input type="text" id="Hobby" name="Hobby"value="Ingresa tu pasatiempos"/>
    <hr>
        <button type="submit">¡Ingresamos Datos!</button>
    </form>
   </div>
</body>
</html>