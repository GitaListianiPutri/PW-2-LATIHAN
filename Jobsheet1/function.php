<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fungsi</title>
</head>
<body>
    <?php
    function persegi_panjang($p, $l){
        return $p * $l;
    }
    ?>


    <?php
    if (isset($_POST['submit'])) {
        $p = $_POST['p'];
        $l = $_POST['l'];
        $luas = persegi_panjang($p, $l); // Menggunakan fungsi persegi_panjang yang sudah didefinisikan

        // echo "Luas Persegi Panjang = $luas";
    }
    ?>
<form method="post" action="">
    Masukkan Panjang = <input type="text" name="p"> 
    Masukkan Lebar = <input type="text" name="l"> 
    <input type="submit" name="submit" value="Hitung">
</form>
<?php
    if (isset($luas)) {
        echo "Panjang: $p<br>";
        echo "Lebar: $l<br>";
        echo "Luas Persegi Panjang: $luas";
    }
?>

    
</body>
</html>