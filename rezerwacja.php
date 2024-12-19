<?php


$connect = new mysqli("localhost","root", "", "4tig1_baza");

if (!$connect){
    echo "Nie". mysqli_connect_error();
}

$data_rez = $_POST['data'];
$telefon = $_POST['tel'];
$osoby = $_POST['ilosc'];

$stmt = $connect->prepare("INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES (?,?,?);");
$stmt->bind_param("sss", $data_rez, $telefon, $osoby);

$stmt->execute();
$stmt->close();
$connect->close();

echo "Dodano rezerwację do bazy";
?>