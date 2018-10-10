<?php

namespace Lib;

interface SorterInterface
{
    public function setSortOrder(string $ascDesc): SorterInterface;

    public function sort(): array;

    public function __construct(array $data);
}
