<?php
    $serveron1 = $_SERVER['HTTP_REFERER'];

    ini_set('display_errors', 'Off');
    error_reporting(0);
    session_start();

    if($serveron1 != "https://linkvertise.com/" || time() - $_SESSION['timefour'] < 5 || !isset($_SESSION['timefour'])) {
        echo "Você não completou o linkversite corretamente, tente novamente.";
        echo '<meta http-equiv="Refresh" Content="4";url="htttps://keyhaunterz.tk/step2.php>"';
        return;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key System - Haunter Z</title>

    <style>
        * {
            margin: 0px; 
            padding: 0px; 
            box-sizing: border-box;
        }
 
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
            justify-content: center;
            background: #000;
            font-family: arial, sans-serif;
        }
 
        input, button {
            font-size: 25px;
            border-radius: 10px;
            border: none;
            padding: 20px;
        }
 
        input {
            background-color: #131E2F;
            color: #FFF;
            width: 500px;
        }
 
        input:focus {
            outline: none;
        }
 
        button {
            margin-left: 10px;
            background-color: #01A5B1;
            color: white;
            text-transform: uppercase;
            transition: 0.3s;
            cursor: pointer;
            font-weight: bold;
        }
 
        button:hover {
            background-color: #03666d;
            transition: 0.3s;
        }

        h1 {
            color: #FFF;
        }
    </style>

    <script>
        function copiarTexto() {
            let textoCopiado = document.getElementById("texto");
            textoCopiado.select();
            textoCopiado.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Key copiada com sucesso!");
        }
    </script>
</head>
<body>
    <?php
        $servername = "localhost";
        $database = "keyshz";
        $username = "root";
        $password = "";
    
        $conn = mysqli_connect($servername, $username, $password, $database);
    
        function genKeys($length = 34) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomKey = '';
    
            for($i = 0; $i < $length; $i++) {
                $randomKey .= $characters[rand(0, $charactersLength - 1)];
            }
    
            return $randomKey;
        }
    
        $ipclient = $_SERVER['REMOTE_ADDR'];
        
        $keyhz = genKeys(34);
        $sql = "INSERT INTO keys_hz(keyz, userhz) VALUES ('$keyhz', '$ipclient')";
    
        echo "<h1>KEY GERADA COM SUCESSO!</h1>";
        echo '<input type="text" name="texto" id="texto" value="'.$keyhz.'"/>';
    
        mysqli_query($conn,$sql);
        mysqli_close($conn);
    
        $_SESSION = array();
    ?>
    <button onclick="copiarTexto()">Copiar</button>
</body>
</html>