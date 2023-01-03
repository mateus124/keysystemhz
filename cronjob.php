<?php
    $servername = "localhost";
    $database = "keyshz";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "DELETE from keys_hz WHERE date_added < now() - interval 1 day;";

    mysqli_query($conn,$sql);
    mysqli_close($conn);
?>