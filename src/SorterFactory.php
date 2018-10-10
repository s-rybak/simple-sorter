<?php
/**
 * Sorter factory class
 *
 * created sorters object
 *
 * @author  Sergey R <qwe@qwe.com>
 */
namespace Lib;

final class SorterFactory
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function createStandartSorter(): SorterInterface
    {
        return new StandartSorter($this->data);
    }
}
