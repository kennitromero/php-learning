<?php

namespace DesignPatterns\FactoryMethod\ExampleSocialNetwork;

/**
 * Interface SocialNetworkConnector
 * @package DesignPatterns\FactoryMethod\ExampleSocialNetwork
 * @author Kennit Ruz <kruz@merqueo.com>
 */
interface SocialNetworkConnector
{
    /**
     * @return void
     */
    public function logIn(): void;

    /**
     * @return void
     */
    public function logOut(): void;

    /**
     * @param $content
     * @return void
     */
    public function createPost($content): void;
}
