<?php
    include 'db_connection.php';
    $conn = OpenCon();
    
    echo "Connected Succesfully";

    if ($conn -> connect_error) {
        die("Connection failed: "
        . $conn->connect_error);
    }

    // $sqlquery = "INSERT INTO gestionale VALUES ('kevin', 'adam', 'passaretti', '0', '0')";

    // if ($conn -> query($sqlquery) === TRUE) {
    // echo "record inserted succesfully!";
    // } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // loops till end of data
    $sql = "SELECT * FROM gestionale ORDER BY id DESC";
    $result = $conn->query($sql);
    CloseCon($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gestionale.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div id="container">

        <header>
            <div id="logo">
                <a href="index.php"><p>Gestionale</p></a>
            </div>
            <div id="header-links">
                <a href="src/contratti.php" class="header-link">Contratti</a>
            </div>
        </header>


        <div id="content">
            <div id="menu">
                <a  href="#"> cotratti mensili</a>
                <a  href="#"> asseganti </a>
                <a  href="#"> fatturato</a>
            </div>

            <?php
            
                while ($rows=$result->fetch_assoc())
                 {
                   
                   
            ?>
            <div id="elenco_contratti">
                <tr>
                    <!-- <td><?php echo $rows['agente']; ?> </td>
                    <td><?php echo $rows['nome-cliente']; ?> </td>
                    <td><?php echo $rows['cognome-cliente']; ?> </td>
                    <td><p>stato contratto</p> </td>
                    <td><?php echo $rows['id']; ?> </td><br> -->
                    
                </tr>
            </div>
            <?php
                 }
            ?>

            <!-- <div>
                <ul>
                    <li>contratti mensili:</li>
                    <li>in convalida: 5</li>
                    <li>ko: 20</li>
                    <li>validi: 70</li>
                </li>
            </div> -->
        </div>

        <!-- <div id="content">
            <input type="text">
            <input type="text">
        </div> -->

        
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>