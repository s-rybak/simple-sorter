<?php

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
