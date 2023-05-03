<?php

//SEGITIGA PERTAMA

function cetaksegitiga1($simbol, $row = 6){
    for ($i=$row; $i>0; $i--){
        for ($j=$row; $j>$i; $j--){
            echo "$simbol";
        }
        echo "<br />";
    }
}

cetaksegitiga1('*');

echo "<br />";

//SETIGA KEDUA 

function cetaksegitiga2($simbol, $row = 5){
    for ($i=0; $i<$row; $i++){
        for ($j=$row; $j>$i; $j--){
        echo "$simbol";
    }
    echo "<br />";
    }
}

cetaksegitiga2('*');

echo "<br />";

//SETIGA KETIGA 

function cetaksegitiga3($simbol, $row = 6){
    for ($i=$row; $i>0; $i--){
        for ($j=2; $j<=$i; $j++){
            echo " &nbsp; ";
        }
        for ($k=$row; $k>$i; $k--){
            echo "$simbol";
        }
        echo "<br />";
    }
}

cetaksegitiga3('*');

echo "<br />";

//SETIGA KEEMPAT  

function cetaksegitiga4($simbol, $row = 5){
    for ($i=$row; $i>0; $i--){
        for ($j=$i; $j<$row; $j++){
            echo " &nbsp; ";
        }
        for ($k=$i; $k>0; $k--){
            echo "$simbol";
        }
        echo "<br />";
    }
}

cetaksegitiga4('*');

echo "<br />";

function ubahpattern($simbol){
    cetaksegitiga1($simbol);
    cetaksegitiga2($simbol);
    cetaksegitiga3($simbol);
    cetaksegitiga4($simbol);
}

ubahpattern('y');


// echo "Triangle Upside Left";

// for ($i=6; $i>0; $i--){
//     for ($j=6; $j>$i; $j--){
//     echo "*";
// }
// echo "<br />";
// }

// echo "Triangle Downside Left";
// echo "<br />";
// for ($i=0; $i<5; $i++){
//     for ($j=5; $j>$i; $j--){
//     echo "*";
// }
// echo "<br />";
// }

// echo "Triangle Downside Right";
// for ($i=6; $i>0; $i--){
//     for ($j=1; $j<=$i; $j++){
//         echo " &nbsp; ";
//     }
//     for ($k=6; $k>$i; $k--){
//         echo "*";
//     }
//     echo "<br />";
// }

// echo "Triangle Downside Right";
// echo "<br />";
// for ($i=0; $i<5; $i++){
//     for ($j=5; $j>$i; $j--){
//         echo "*";
//     }
//     for ($k=5; $k<$i; $k--){
//         echo " &nbsp; ";
//     }
//     echo "<br />";
// }

// echo "<br />";


// function cetakbaru($simbol, $row = 5){
//     for ($i=0; $i<$row; $i++){
//         for ($j=$row; $j>$i; $j--){
//             echo "$simbol";
//         }
//         for ($k=$row; $k<$i; $k--){
//             echo " &nbsp; ";
//         }
//         echo "<br />";
//     }
// }

// cetakbaru('#');

// echo "<br />";

// function cetak($x){
//     for ($i=0; $i<5; $i++){
//         for ($j=5; $j>$i; $j--){
//             echo "$x";
//         }
//         for ($k=5; $k<$i; $k--){
//             echo " &nbsp; ";
//         }
//         echo "<br />";
//     }
// }

// cetak('&');

// echo "<br />";



?>