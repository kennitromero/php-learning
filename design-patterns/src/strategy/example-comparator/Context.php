<?php

namespace DesignPatterns\Strategy\ExampleComparator;

/**
 * Class Context
 * @package DesignPatterns\Strategy\ExampleComparator
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class Context
{
    /**
     * @var Comparator
     */
    private $comparator;

    /**
     * Context constructor.
     * @param Comparator $comparator
     */
    public function __construct(Comparator $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}
