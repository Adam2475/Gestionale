<?php
    include '../db_connection.php';
    $conn = OpenCon();

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     //connect data from the input field
    //     $data = $_REQUEST['val1'];

    //     if (empty($data)) {
    //         echo "data is empty";
    //     } else {
    //         echo $data;
    //     }
    // }

    CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../gestionale.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div id="container">

        <header>
            <div id="logo">
                <a href="../index.php"><p>Gestionale</p></a>
            </div>
            <div id="header-links">
                <a href="src/contratti.html" class="header-link">Contratti</a>
            </div>
        </header>

        <div>
            <form action="insert.php" id="form-contratto" method="POST">
                <!-- <label for="agente">
                    agente:
                </label> -->
                <input type="text" name="agente" id="agente" value="agente">
                <br>
                <!-- <label for="nome-cliente">
                    nome cliente:
                </label> -->
                <input type="text" name="nome-cliente" id="nome-cliente" value="nome cliente">
                <br>
                <!-- <label for="cognome-cliente">
                    cognome cliente:
                </label> -->
                <input type="text" name="cognome-cliente" id="cognome-cliente" value="cognome cliente">
                <br>
                <!-- <label for="stato">
                    stato:
                </label> -->
                <select name="stato" id="stato">
                    <option value="attivo">attivo</option>
                    <option value="elaborazione">in elaborazione</option>
                    <option value="ko">ko</option>
                </select>
                <br>
                <button type="submit" class="pulsante">invia</button>
            </form>
        </div>

    </div>
        <!-- bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>