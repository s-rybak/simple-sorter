<?php
/**
 * Sorter abstract class
 *
 * preserves standart functional of sorter class
 *
 * @author  Sergey R <qwe@qwe.com>
 */
namespace Lib;

abstract class SorterAbstractClass implements SorterInterface
{
    protected $data;
    protected $sortOrder;

    const ASC = 'asc';
    const DESC = 'desc';

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * setSortOrder - sets sorting order asc or desc
     * @param string $ascDesc sorting order
     *
     * @return SorterInterface current object
     */
    public function setSortOrder(string $ascDesc): SorterInterface
    {
        $this->sortOrder = $ascDesc;

        return $this;
    }

    public function sort(): array
    {
        return $this->data;
    }
}
