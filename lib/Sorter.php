<?php

namespace Lib;

final class Sorter {

	private $data;

	public function __construct($data) {

		$this->data = $data;

	}

	public function useStandartSorter(){

		return new StandartSorter($this->data);

	}

}