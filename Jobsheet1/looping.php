<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Bilangan genap dari 1 sampai 10 menggunakan for <br>" ; 
    for($i = 2; $i <= 10; $i += 2) {
       
        echo $i , " <br>";
    }

    echo "Bilangan ganjil dari 1 sampai 10 menggunakan while <br>";
//     $i = 1;
//     while ($i <= 10) {
//     if ($i % 2 != 0) {
//         echo $i . " <br> ";
//     }
//     $i++;
// }

    $i = 1;
    while ($i <=10){
        echo " $i <br> ";
        $i +=2;
    }

    echo "Bilangan prima kurang dari 20 menggunakan do while <br>";
    $num = 2;
    do {
        $bil = true;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $bil = false;
                break;
            }
        }
    
        if ($bil) {
            echo $num . "<br> ";
        }
    
        $num++;
    } while ($num < 20);
    
    ?>
</body>
</html>