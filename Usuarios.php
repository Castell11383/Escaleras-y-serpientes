<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">

</head>
<style>
    .box {
        text-align: center;
        box-shadow: 2px 2px 45px rgb(251, 251, 251);
        font-family: 'Courier New', Courier, monospace;
        color: white;
        border: 5px;
        border-radius: 3px;
        border-color: black;
        background-color: hsla(125, 25%, 50%, 0.5);
        border-style: inset;
        border-radius: 10px;
        width: 350px;
        height: 350px;
        margin-left: 40%;
        margin-top: 5%;

    }

    form {
        padding: 5px;
        color: black;
    }

    h1 {
        text-align: center;
        font-family: "Dancing Script", cursive;
    }

    button {
        background-color: red;
        border-radius: 5px;
        color: white;
        align-items: center;
        width: 20%;
        height: 20%;
    }

    body {
        background-image: url(./Images/Fondo.jpg);
        background-size: 2000px;
        background-color: bisque;
    }

    .saludo {
        text-align: center;
        text-shadow: 2px 2px 45px rgb(0, 0, 255);
        font-family: "Dancing Script", cursive;
        font-size: 500%;
        color: crimson;

    }
</style>

<body>
    <h1 class="saludo">
        <p>Escaleras y Serpientes</p>
    </h1>
    <div class="box"><br>
        <h1>Ingrese a los participantes</h1>
        <form action="./Tablero.php" id="form1" method="post">
            <p><label for="nombre1"></label></p>
            <p><input type="text" name="nombre1" placeholder="Jugador 1"></p>
            <p><label for="nombre2"></label></p><br>
            <p><input type="text" name="nombre2" placeholder="Jugador 2"></p><br>
            <p><button type="submit">Enviar</button></p>
        </form>
    </div>

</body>

</html>