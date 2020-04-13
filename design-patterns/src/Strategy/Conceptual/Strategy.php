<?php

namespace DesignPatterns\Strategy\Conceptual;

/**
 * The Strategy interface declares operations common to all supported versions
 * of some algorithm.
 *
 * La interfaz de la Estrategia declara las operaciones comunes a todas las versiones soportadas de algún algoritmo.
 * El Contexto utiliza esta interfaz para llamar al algoritmo definido por Estrategias Concretas.
 *
 * Interface Strategy
 * @package DesignPatterns\Strategy\Conceptual
 * @author Kennit Ruz <kruz@merqueo.com>
 */
interface Strategy
{
    /**
     * @param array $data
     * @return array
     */
    public function doAlgorithm(array $data): array;
}
