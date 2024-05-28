<?php
    $val1= $_POST['val1'];
    $val2= $_POST['val2'];
    $val3= $val1*$val2;
    if ($val2 == 0) {
        echo "Nie dzielimy przez zero";
    } else {
        echo $val3;
    }

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->prepare("INSERT INTO wynik VALUES ($val3)");
    $conn->close();
?>

