<?php

namespace DesignPatterns\strategy\Conceptual\Strategies;

use DesignPatterns\Strategy\Conceptual\Strategy;

/**
 * Class ConcreteStrategyA
 * @package DesignPatterns\strategy\Conceptual\Strategies
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class ConcreteStrategyA implements Strategy
{
    /**
     * Concrete Strategies implement the algorithm while following the base Strategy
     * interface. The interface makes them interchangeable in the Context.
     *
     * Las Estrategias Concretas implementan el algoritmo siguiendo la interfaz de la Estrategia base.
     * La interfaz los hace intercambiables en el contexto.
     * @param array $data
     * @return array
     */
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}
