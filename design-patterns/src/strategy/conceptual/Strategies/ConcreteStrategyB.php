<?php

namespace DesignPatterns\strategy\Conceptual\Strategies;

use DesignPatterns\Strategy\Conceptual\Strategy;

/**
 * Class ConcreteStrategyB
 * @package DesignPatterns\Strategy\Conceptual\Strategies
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class ConcreteStrategyB implements Strategy
{
    /**
     * @param array $data
     * @return array
     */
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}
