#!/usr/bin/env php
<?php

require_once __DIR__ . "/../vendor/autoload.php";

$intArray = [8,3,4,6,1,6,9,4,2,7,5,0,11,10,88];
$strArray = ["e","k","c","g","m","a","d","h","b","f","n","l"];

echo json_encode(

	(new Lib\Sorter($intArray))
        ->sort(Lib\Sorter::ASC)

)."\n";

echo json_encode(

	(new Lib\Sorter($intArray))
        ->sort(Lib\Sorter::DESC)

)."\n";

echo json_encode(

	(new Lib\Sorter($strArray))
        ->sort(Lib\Sorter::ASC)

)."\n";

echo json_encode(

	(new Lib\Sorter($strArray))
        ->sort(Lib\Sorter::DESC)

)."\n";