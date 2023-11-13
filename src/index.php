<?php

require_once "Libs/PHPTest.php";
require_once "App/NewsLetter.php";
require_once "App/Youtube.php";
require_once "App/NewsLetterSubscriptionsController.php";

use Libs\PHPTest;
use App\NewsLetterSubscriptionsController;
use App\Youtube;

$data = new PHPTest();

// Exam 1
$data->countVowel('bbbbmmmasdmmmm'); // bbbbmmmasdmmmm : 1
$data->countVowel('Rumah Kucing'); // Rumah Kucing : 4

// Exam 2
$data->oddAndEvenValue([1, 7, 8, 10, 12, 5, 22, 3]); // [1,7,5,3], [8,10,12,22]

// Exam 4
$data->findValueTag('<div>Hari ini hari Selasa</div>'); // Hari ini hari Selasa
$data->findValueTag('<test>Hello World</test>'); // <test>Hello World</test>
$data->findValueTag('<span>Selamat datang di span world</span>'); // Selamat datang di span world

// Exam 5
$array = [23, 14, 6, 9, 10, 11, 2000, 230]; // mendefinisikan array

$data->findIndexByAddition([3, 3], $array); // Angka 6 berada pada index ke : 2
$data->findIndexByAddition([12, 12], $array); // Not Found
$data->findIndexByAddition([1000, 1000], $array); // Angka 2000 berada pada index ke : 6

// Exam 3
$newsletter = new NewsLetterSubscriptionsController();
$newsletter->store(New Youtube());