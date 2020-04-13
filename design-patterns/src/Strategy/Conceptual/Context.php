<?php

namespace DesignPatterns\Strategy\Conceptual;

/**
 * The Context defines the interface of interest to clients.
 *
 * El Contexto define la interfaz de interés para los clientes.
 *
 * Class Context
 * @package DesignPatterns\Strategy\Conceptual
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class Context
{
    /**
     * @var Strategy The Context maintains a reference to one of the Strategy
     * objects. The Context does not know the concrete class of a Strategy. It
     * should work with all strategies via the Strategy interface.
     *
     * El Contexto mantiene una referencia a uno de los objetos de la Estrategia.
     * El Contexto no conoce la clase concreta de una estrategia.
     * Debería trabajar con todas las estrategias a través de la interfaz de la Estrategia.
     */
    private $strategy;

    /**
     * Usually, the Context accepts a Strategy through the constructor, but also
     * provides a setter to change it at runtime.
     *
     * Normalmente, el Contexto acepta una estrategia a través del constructor,
     * pero también proporciona un configurador para cambiarla en tiempo de ejecución.
     * @param Strategy $strategy
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Usually, the Context allows replacing a Strategy object at runtime.
     *
     * Normalmente, el Contexto permite reemplazar un objeto de Estrategia en tiempo de ejecución.
     * @param Strategy $strategy
     */
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * The Context delegates some work to the Strategy object instead of
     * implementing multiple versions of the algorithm on its own.
     *
     * El Contexto delega parte del trabajo al objeto de la Estrategia
     * en lugar de implementar múltiples versiones del algoritmo por sí mismo.
     */
    public function doSomeBusinessLogic(): void
    {
        // ...

        echo "Context: Sorting data using the Strategy (not sure how it'll do it)\n";
        // Contexto: Clasificar los datos usando la estrategia (no estoy seguro de cómo lo hará)

        $result = $this->strategy->doAlgorithm(["a", "b", "c", "d", "e"]);
        echo implode(",", $result) . "\n";

        // ...
    }
}
