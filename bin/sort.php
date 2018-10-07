#!/usr/bin/env php
<?php

require_once __DIR__ . "/../vendor/autoload.php";

$intArray = [ 8, 3, 4, 6, 1, 6, 9, 4, 2, 7, 5, 0, 11, 10, 88 ];
$strArray = [ "e", "k", "c", "g", "m", "a", "d", "h", "b", "f", "n", "l" ];

$SorterInt = (new Lib\Sorter( $intArray ))->useStandartSorter();
$SorterStr = (new Lib\Sorter( $strArray ))->useStandartSorter();

echo json_encode(

	     $SorterInt
		     ->setSortOrder( \Lib\StandartSorter::ASC )
		     ->sort()

     ) . "\n";

echo json_encode(

	     $SorterInt
		     ->setSortOrder( \Lib\StandartSorter::DESC )
		     ->sort()

     ) . "\n";

echo json_encode(

	     $SorterStr
		     ->setSortOrder( \Lib\StandartSorter::ASC )
		     ->sort()

     ) . "\n";

echo json_encode(

	     $SorterStr
		     ->setSortOrder( \Lib\StandartSorter::DESC )
		     ->sort()

     ) . "\n";