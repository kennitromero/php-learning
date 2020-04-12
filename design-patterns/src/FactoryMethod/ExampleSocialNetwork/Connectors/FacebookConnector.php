<?php

namespace DesignPatterns\FactoryMethod\ExampleSocialNetwork\Connectors;

use DesignPatterns\FactoryMethod\ExampleSocialNetwork\SocialNetworkConnector;

/**
 * Class FacebookConnector
 * @package DesignPatterns\FactoryMethod\ExampleSocialNetwork\Connectors
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class FacebookConnector implements SocialNetworkConnector
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
     * FacebookConnector constructor.
     * @param string $login
     * @param string $password
     */
    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return void
     */
    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    /**
     * @return void
     */
    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login\n";
    }

    /**
     * @param $content
     * @return void
     */
    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}
