<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fungsi</title>
</head>
<body>
    <?php
    // function persegi_panjang($p, $l){
    //     return $p * $l;
    // }
    // echo persegi_panjang(5,9);
    // 
    function hitungLuasPersegiPanjang($panjang, $lebar) {
        return $panjang * $lebar;
    }
    
    echo "Program Menghitung Luas Persegi Panjang\n";
    
    $panjang = (float)readline("Masukkan panjang: ");
    $lebar = (float)readline("Masukkan lebar: ");
    
    $luas = hitungLuasPersegiPanjang($panjang, $lebar);
    
    echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $luas\n";
    ?>

    
</body>
</html>