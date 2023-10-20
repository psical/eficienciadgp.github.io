<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGP1</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Nosifer&display=swap" rel="stylesheet">


    <video autoplay muted preload loop src="rss/fondo.mp4"></video>

</head>
<body>

<form class="form-datos" method="POST" action="insert.php" autocomplete="off">
				<div class="container-inputs">
                    <label for="">Ingresa tu nombre</label><br>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
				</div><br><br>
                <div class="container-inputs">
                    <label for="">Ingresa tu ingrediente para hacer una pócima de la eficiencia</label><br>
					<input type="text" name="ingrediente" id="ingrediente" placeholder="Ingrediente" required>
				</div><br>

            	<button class="button" type="submit" href="">Guardar</button>
</form>

</div>
    
</body>
</html>