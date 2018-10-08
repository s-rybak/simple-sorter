<?php

namespace Lib;

abstract class SorterAbstractClass implements SorterInterface
{

	protected $data;
	protected $sortOrder;

	const ASC = 'asc';
	const DESC = 'desc';

	public function __construct($data){

		$this->data = $data;

	}

	public function setSortOrder($ascDesc){

		$this->sortOrder = $ascDesc;

		return $this;

	}

	public function sort(){

		return $this->data;

	}

}