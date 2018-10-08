<?php

namespace Lib;

class StandartSorter extends SorterAbstractClass{

	public function sort() {

		return $this->sortOrder == 'asc' ?
			( \sort($this->data) ? $this->data : $this->data) :
			( \rsort($this->data) ? $this->data : $this->data);

	}

}