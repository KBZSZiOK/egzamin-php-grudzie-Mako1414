<?php

echo "Dodano rezerwację do bazy";

$connect = new mysqli("localhost","root", "", "4tig1_baza");

if (!$connect){
    echo "Nie". mysqli_connect_error();
}

$data_rez = $_POST['data'];
$telefon = $_POST['tel'];
$osoby = $_POST['ilosc'];


?>