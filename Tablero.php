<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        h1 {
            font-family: "Dancing Script", cursive;
            font-size: 250%;
            color: green;
            text-align: center;
            text-shadow: 2px 2px 45px rgb(0, 0, 255);
        }

        h3 {
            font-family: "Dancing Script", cursive;
            text-align: center;
            color: white;
        }

        body {
            background-color: black;
            background-image: url(./Images/Fondo.jpg);
            background-size: 2000px;
            background-position: right top;
        }

        .table1 {

            border: 5px;
            border-radius: 5px;
            border-collapse: collapse;
            border-style: inherit;
            width: 50%;
            margin-left: 23.5%;
            padding: 1%;
        }

        .table {
            box-shadow: 2px 2px 45px rgb(251, 251, 251);
            border: 8px;
            border-collapse: collapse;
            border-color: aqua;
            border-style: inset;
            margin: 20px auto;
        }

        td {
            width: 85px;
            height: 73px;
            border: 2px;
        }

        .blanco {
            background-color: white;
        }

        .amarillo {
            background-color: yellow;
        }

        .rojo {
            background-color: red;
        }

        .azul {
            background-color: blue;
        }

        .verde {
            background-color: green;
        }

        .ficha {
            border-radius: 50%;
            width: 80%;
            height: 80%;
            margin: auto;
        }

        .contenedor {
            display: flex;
            justify-content: space-between;
        }

        .jugador1,
        .jugador2 {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .titulo {
            font-family: "Dancing Script", cursive;
            font-size: 250%;
            color: purple;
            text-align: center;
            text-shadow: 2px 2px 45px rgb(251, 251, 251);
        }

        .box1 {
            background-color: white;
            color: black;
            border: silver;
            border-radius: 5px;
            border-style: inset;
            text-align: center;
            width: 350px;
            margin-left: 20%;
            padding: 5px;
        }

        .color{
            border: 3px;
            border-color: black;
        }

    </style>
</head>

<body>
    <?php
    if (isset($_POST['nombre1'])) {
        $jugador1 = $_POST['nombre1'];
        $jugador2 = $_POST['nombre2'];
    }
    ?>

    <div class="contenedor">
        <div class="row">
            <div class="col">
                <div class="jugador1">
                    <?php
                    echo '<h3> Jugador No. 1 </h3>';
                    echo '<h1>' . $jugador1 . '</h1>';
                    echo '<img src="./Images/Ficha negra.png" width="50px" height="50px">';
                    ?>
                </div>
                <div class="col">
                    <div class="box1">

                        <?php

                        if (!isset($_SESSION['acumulado1'])) {
                            $_SESSION['acumulado1'] = 0;
                        }

                        if (isset($_POST['lanzar_dado'])) {

                            $numero_aleatorio = rand(1, 12);


                            $_SESSION['acumulado1'] += $numero_aleatorio;

                            echo "<p>Número Aleatorio Generado: $numero_aleatorio</p>";
                            echo "<p>Acumulado1: " . $_SESSION['acumulado1'] . "</p>";
                        }


                        if (isset($_POST['reset_acumulado1'])) {

                            $_SESSION['acumulado1'] = 0;
                            echo "<p>Acumulado1 reiniciado a 0.</p>";
                        }
                        ?>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <button type="submit" name="lanzar_dado" class="bg-warning">Lanzar Dado</button>
                            <button type="submit" name="reset_acumulado" class="bg-warning">Reiniciar Acumulado</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <h1 class="titulo">Serpientes y Escalereas</h1>

        <div class="row">
            <div class="col-6">
                <div class="jugador1">
                    <?php
                    echo '<h3> Jugador No. 2 </h3>';
                    echo '<h1>' . $jugador2 . '</h1>';
                    echo '<img src="./Images//Ficha naranja.png" width="50px" height="50px">';
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="box1">

                    <?php

                    if (!isset($_SESSION['acumulado2'])) {
                        $_SESSION['acumulado2'] = 0;
                    }


                    if (isset($_POST['lanzar_dado'])) {

                        $numero_aleatorio = rand(1, 12);


                        $_SESSION['acumulado2'] += $numero_aleatorio;


                        echo "<p>Número Aleatorio Generado: $numero_aleatorio</p>";
                        echo "<p>Acumulado2: " . $_SESSION['acumulado2'] . "</p>";
                    }

                    if (isset($_POST['reset_acumulado2'])) {

                        $_SESSION['acumulado2'] = 0;
                        echo "<p>Acumulado2 reiniciado a 0.</p>";
                    }
                    ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <button type="submit" name="lanzar_dado" class="bg-warning">Lanzar Dado</button>
                        <button type="submit" name="reset_acumulado" class="bg-warning">Reiniciar Acumulado</button>
                    </form>

                </div>
            </div>

        </div>
    </div>

    <div class="container bg-light">
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-10">
                <div class="table1">
                    <table class="table" id="table">
                        <img src="./Images/Escalera 1.1.png" alt="" style="z-index:2; margin-top:80px; margin-left:100px; position:absolute; width:100px; height:100px; transform: rotate(0)">
                        <img src="./Images/Escalera 2.1.png" alt="" style="z-index:2; margin-top:45px; margin-left:550px; position:absolute; width:300px; height:810px; transform: rotate(-23deg)">
                        <img src="./Images/Escalera 5.1.png" alt="" style="z-index:2; margin-top:90px; margin-left:85px; position:absolute; width:200px; height:450px; transform: rotate(40deg)">
                        <img src="./Images/Escalera 4.1.png" alt="" style="z-index:2; margin-top:490px; margin-left:430px; position:absolute; width:250px; height:300px; transform: rotate(0deg)">
                        <img src="./Images/Serpiente 1.1.png" alt="" style="z-index:2; margin-top:325px; margin-left:250px; position:absolute; width:350px; height:200px; transform: rotate(10deg)">
                        <img src="./Images/Serpiente 4.1.png" alt="" style="z-index:2; margin-top:135px; margin-left:725px; position:absolute; width:100px; height:200px; transform: rotate(10deg)">
                        <img src="./Images/Serpiente 5.1.png" alt="" style="z-index:2; margin-top:35px; margin-left:400px; position:absolute; width:100px; height:215px; transform: rotate(0)">
                        <img src="./Images/Serpiente 2.1.1.png" alt="" style="z-index:2; margin-top:485px; margin-left:55px; position:absolute; width:125px; height:215px; transform: rotate(0)">
                        <img src="./Images/Escalera 6.1.png" alt="" style="z-index:2; margin-top:500px; margin-left:290px; position:absolute; width:75px; height:175px; transform: rotate(0)">
                        <img src="./Images/Escalera 1.1.png" alt="" style="z-index:2; margin-top:290px; margin-left:360px; position:absolute; width:100px; height:100px; transform: rotate(0)">

                        <img src="./Images/Ficha naranja.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:715px;
                        margin-left:-70px; position:absolute;">

                        <img src="./Images/Ficha negra.png" alt="" style="z-index:2; width:60px; height:50px; margin-top:715px;
                        margin-left:-55px; position:absolute;">
                        <?php

                        $filas = 10;
                        $columnas = 10;
                        $contador = 1;

                        $paleta_colores = ['rojo', 'azul', 'amarillo', 'verde', 'blanco'];

                        $colores_filas = [];

                        for ($i = 0; $i < $filas; $i++) {

                            shuffle($paleta_colores);

                            $colores_filas[] = $paleta_colores;
                        }

                        for ($fila = 0; $fila < $filas; $fila++) {
                            echo "<tr>";

                            for ($columna = 0; $columna < $columnas; $columna++) {

                                $color = $colores_filas[$fila][$columna % count($paleta_colores)];

                                echo "<td class='$color'>";
                                echo '<span class="numero">' . $contador++ . '</span>';
                                echo "</td>";
                            }
                            echo "</tr>";
                        }

                        ?>
                    </table>
                </div>
            </div>

        </div>

    </div>



</body>

</html>