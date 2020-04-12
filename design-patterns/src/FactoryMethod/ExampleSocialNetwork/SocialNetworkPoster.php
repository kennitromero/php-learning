<?php

namespace DesignPatterns\FactoryMethod\ExampleSocialNetwork;

/**
 * El Creador declara un método de fábrica que puede ser utilizado
 * como sustituto de las llamadas de constructor directo de los productos, por ejemplo:
 *
 * - Before: $p = new FacebookConnector;
 * - After: $p = $this->getSocialNetwork;
 *
 * Esto permite cambiar el tipo de producto creado por las subclases de SocialNetworkPoster
 *
 * Class SocialNetworkPoster
 * @package DesignPatterns\factoryMethod\ExampleSocialNetwork
 * @author Kennit Ruz <kruz@merqueo.com>
 */
abstract class SocialNetworkPoster
{
    /**
     * El método de la fábrica real. Observe que devuelve el conector de la abstracción.
     * Esto permite a las subclases devolver cualquier conector concreto sin romper el contrato de la superclase.
     *
     * @return SocialNetworkConnector
     */
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    /**
     * Cuando se utiliza el método de fábrica dentro de la lógica de negocio de los creadores,
     * las subclases pueden alterar la lógica indirectamente devolviendo diferentes tipos de conector del método de fábrica.
     *
     * @param $content
     */
    public function post($content): void
    {
        // Call the factory method to create a Product object...
        $network = $this->getSocialNetwork();
        // ...then use it as you will.
        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}
