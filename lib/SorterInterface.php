<?php

namespace Lib;

interface SorterInterface {

	public function setSortOrder($ascDesc);

	public function sort();

	public function __construct($data);

}