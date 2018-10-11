<?php

use PhpCsFixer\Finder;

$finder = Finder::create()
                    ->in( __DIR__ . "/src" )
                    ->in( __DIR__ . "/bin" );

return \PhpCsFixer\Config::create()
                         ->setFinder($finder)
                         ->setRules([
	                         '@PSR2'=>true
                         ]);

