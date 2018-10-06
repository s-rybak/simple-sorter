<?php

namespace Lib;

class Sorter
{

	private $data;

	const ASC = 'asc';
	const DESC = 'desc';

	public function __construct($data){

		$this->data = $data;

	}

	public function sort($ascDesc = 'asc'){

		return $ascDesc == 'asc' ?
			( \sort($this->data) ? $this->data : $this->data) :
			( \rsort($this->data) ? $this->data : $this->data);

	}
}