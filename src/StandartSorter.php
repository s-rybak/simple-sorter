<?php
/**
 * Standart Sorter class
 *
 * uses php sort or rsort function to sort array
 *
 * @author  Sergey R <qwe@qwe.com>
 */
namespace Lib;

class StandartSorter extends SorterAbstractClass
{
    /**
     * Sorting logic
     *
     * if sortOrder set to asc it will use ascending sort logic ( php sort function )
     * if sortOrder set to desc it will use descending sort logic ( php rsort function )
     *
     * @return array
     */
    public function sort(): array
    {
        return $this->sortOrder == 'asc' ?
            (\sort($this->data) ? $this->data : $this->data) :
            (\rsort($this->data) ? $this->data : $this->data);
    }
}
