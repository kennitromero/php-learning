<?php

namespace DesignPatterns\strategy\ExampleComparator\Strategies;

use DesignPatterns\strategy\ExampleComparator\Comparator;

/**
 * Class IdComparator
 * @package DesignPatterns\strategy\ExampleComparator\Strategies
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class IdComparator implements Comparator
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}
