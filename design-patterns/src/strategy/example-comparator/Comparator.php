<?php

namespace DesignPatterns\strategy\ExampleComparator;

/**
 * Interface Comparator
 * @package DesignPatterns\strategy\ExampleComparator
 * @author Kennit Ruz <kruz@merqueo.com>
 */
interface Comparator
{
    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     */
    public function compare($a, $b): int;
}
