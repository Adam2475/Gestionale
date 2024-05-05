<?php
    include '../db_connection.php';
    $conn = OpenCon();
    // fetching data from the form
    $Agente = $_REQUEST['agente'];
    $NomeCliente = $_REQUEST['nome-cliente'];
    $CognomeCliente = $_REQUEST['cognome-cliente'];
    $Stato = $_REQUEST['stato'];
    // Perform insert query
    $sql = "INSERT INTO gestionale VALUES ('$Agente', '$NomeCliente', '$CognomeCliente', '$Stato', '0')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3> data stored in a database successfully.";
        echo ("\n$Agente\n$NomeCliente\n$CognomeCliente\n$Stato");
    } else {
        echo "Error: $sql."
        . mysqli_error($conn);
    }
    CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../gestionale.css">
</head>
<body>
<header>
            
    <div id="logo">
            <a href="../index.php"><p>Gestionale</p></a>
        </div>
        <div id="header-links">
            <a href="contratti.php" class="header-link">Contratti</a>
        </div>

    </header>
</body>
</html>