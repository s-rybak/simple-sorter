<?php

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
