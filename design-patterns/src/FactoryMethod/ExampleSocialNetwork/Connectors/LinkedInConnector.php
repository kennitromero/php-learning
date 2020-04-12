<?php

namespace DesignPatterns\FactoryMethod\ExampleSocialNetwork\Connectors;

use DesignPatterns\FactoryMethod\ExampleSocialNetwork\SocialNetworkConnector;

/**
 * Class LinkedInConnector
 * @package DesignPatterns\FactoryMethod\ExampleSocialNetwork\Connectors
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class LinkedInConnector implements SocialNetworkConnector
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * LinkedInConnector constructor.
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return void
     */
    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->email with " .
            "password $this->password\n";
    }

    /**
     * @return void
     */
    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->email\n";
    }

    /**
     * @param $content
     * @return void
     */
    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n";
    }
}
