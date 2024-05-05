<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../gestionale.css">
</head>
<body>

    <div id="container">

        <header>
            <div id="logo">
                <a href="../index.php"><p>Gestionale</p></a>
            </div>
            <div id="header-links">
                <a href="contratti.php" class="header-link">Contratti</a>
            </div>
        </header>

        <div id="contract-form">
            <form action="insert.php" id="form-contratto" method="POST">
                <input type="text" name="agente" id="agente" placeholder="agente">
                <br>
                <input type="text" name="nome-cliente" id="nome-cliente" placeholder="nome cliente">
                <br>
                <input type="text" name="cognome-cliente" id="cognome-cliente" placeholder="cognome cliente">
                <br>
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
</body>
</html>