<?php
echo "Welcome To My Game\n";
while (true) {
echo "====== Game Tebak Angka =====\n";
echo "Tebak Sebuah Angka antara 1-9 \n";
$computer = rand(1,9);
echo "Masukan Teebakanmu : ";
$player = trim(fgets (STDIN));
if ($player == $computer){
    echo "Menang. Angaka Komputer Adalah $computer. \n";
    exit; 
}else{
    echo "kalah. Angka Komputer Adalah $computer. \n";
}
}