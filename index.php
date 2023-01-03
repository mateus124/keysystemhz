<?php
    ini_set('display_errors', 'Off');
    error_reporting(0);
    session_start();
    $_SESSION['timeone'] = time(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkpoint 1-4 / Haunter Z</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Download Haunter Z APP. https://discord.gg/haunterz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Flicks">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        * {
            padding: 0;
            margin: 0;
        }
        input {
            background-color: #171717;
            color: #03e9f4;
            text-transform: uppercase;
            font-size: 1.2em;
            padding: 20px 40px;
            border: 2px solid #d2bdff;
            border-radius: 4px;
            cursor: pointer;
        }
        
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #171717;
            color: #FFF;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            row-gap: 15px;
            align-items: center;
        }

        input:hover {
            box-shadow: 0px 0px 7px #03e9f4;
            transition: .3s;
        }
    </style>
</head>
<body>
    <h3>Agora vamos ver se você é humano mesmo.</h3>
    <h3>Checkpoint [ 1 de 4 ]</h3>
    <form action="https://link-center.net/418707/haunter-z-1" method="post" id="form" novalidate="novalidate">
        <div style="display: inline-block;" class="g-recaptcha" data-sitekey="6Lc8Oc4hAAAAAAclEMiYdj66SXqpmkPGt_9G4gtW"></div>
        <input type="submit" value="get key" onclick="return validatecp()" id="submit">
    </form>

    <script>
        function validatecp() {
            if(grecaptcha.getResponse() == "") {
                alert('Marque a caixa de validação');
                return false;
            }
        }
    </script>
</body>
</html>