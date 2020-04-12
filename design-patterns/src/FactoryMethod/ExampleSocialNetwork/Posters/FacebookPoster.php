<?php

namespace DesignPatterns\FactoryMethod\ExampleSocialNetwork\Posters;

use DesignPatterns\FactoryMethod\ExampleSocialNetwork\Connectors\FacebookConnector;
use DesignPatterns\FactoryMethod\ExampleSocialNetwork\SocialNetworkConnector;
use DesignPatterns\FactoryMethod\ExampleSocialNetwork\SocialNetworkPoster;

/**
 * Class FacebookPoster
 * @package DesignPatterns\FactoryMethod\ExampleSocialNetwork\Posters
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class FacebookPoster extends SocialNetworkPoster
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * FacebookPoster constructor.
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return SocialNetworkConnector
     */
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}
