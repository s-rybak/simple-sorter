<?php
/**
 * Sorter interface
 *
 * defines necessary methods for sorter class
 *
 * @author  Sergey R <qwe@qwe.com>
 */
namespace Lib;

interface SorterInterface
{
    /**
     * Set sorter order
     *
     * @param string $ascDesc preferable parameter 'asc' or 'desc'
     *
     * @return SorterInterface
     */
    public function setSortOrder(string $ascDesc): SorterInterface;

    /**
     * Sorting logic realisation
     *
     * @return array
     */
    public function sort(): array;

    /**
     * SorterInterface constructor.
     *
     * @param array $data array witch must be sorted
     */
    public function __construct(array $data);
}
