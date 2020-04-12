<?php

namespace DesignPatterns\strategy\ExampleComparator\Strategies;

use DateTime;
use DesignPatterns\strategy\ExampleComparator\Comparator;
use Exception;

/**
 * Class DateComparator
 * @package DesignPatterns\strategy\ExampleComparator\Strategies
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class DateComparator implements Comparator
{
    /**
     * @param $a
     * @param $b
     * @return int
     * @throws Exception
     */
    public function compare($a, $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}
