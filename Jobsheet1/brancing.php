<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brancing</title>
</head>
<body>
<form method="post" action="">
        Masukkan bilangan: <input type="text" name="bilangan">
        <input type="submit" name="submit" value="Cek">
    </form>
    <?php
     if (isset($_POST['submit'])) {
        $bilangan = $_POST['bilangan'];
    // echo "Nilai x = $x <br> <br>";
    if ($bilangan > 0 ){
        echo "$bilangan Bilangan Positif";
    }
    elseif ($bilangan < 0){
        echo "$bilangan Bilangan Negatif";
    }
    else {
        echo "$bilangan Bilangan 0";
    }
}
    ?>
</body>
</html>