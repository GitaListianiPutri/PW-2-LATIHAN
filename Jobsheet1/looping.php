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
    // perulangan for : perulangan yang dikerjakan secara berulang-ulang. set perulangan akan berhenti
    // ketika kondisi telah terpenuhi.
    for($i = 2; $i <= 10; $i +=2) {
       
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
    // perulangan while
    // Perulangan ini berguna untuk memproses suatu pernyataan atau beberapa 
    // pernyataan secara berulang-ulang hingga kondisi terpenuhi
    $i = 1;
    while ($i <=10){
        echo " $i <br> ";
        $i +=2;
    }

    echo "Bilangan prima kurang dari 20 menggunakan do while <br>";
    // perulangan do while
    // Perulangan DO WHILE tetap konsisten melakukan pengulangan sebanyak satu kali diawal, 
    // kemudian dilanjutkan dengan melakukan pengecekan kondisi.
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