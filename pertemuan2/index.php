<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Erico Anugerah Perdana";
// echo 'Halo, nama saya $nama';

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabungan string / concatenation / concat
// .
// $nama_depan = "Erico";
// $nama_depan = "Perdana";
// echo $nama_depan . "" . $nama_belakang;

// Assignment
// =, +=, *=, %=, .=
// $x = 1;
// $y -= 5;
// echo $x;
// $nama = "Erico";
// $nama .= "";
// $nama .= "Perdana";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1")

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);


