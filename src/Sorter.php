<?php

namespace Lib;

final class SorterFactory {

	private $data;

	public function __construct($data) {

		$this->data = $data;

	}

	public function createStandartSorter(){

		return new StandartSorter($this->data);

	}

}