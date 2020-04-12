<?php

namespace DesignPatterns\FactoryMethod\ExampleSocialNetwork\Posters;

use DesignPatterns\FactoryMethod\ExampleSocialNetwork\Connectors\LinkedInConnector;
use DesignPatterns\FactoryMethod\ExampleSocialNetwork\SocialNetworkConnector;
use DesignPatterns\factoryMethod\ExampleSocialNetwork\SocialNetworkPoster;

/**
 * Class LinkedInConnector
 * @package DesignPatterns\FactoryMethod\ExampleSocialNetwork\Posters
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class LinkedInPoster extends SocialNetworkPoster
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
     * @return SocialNetworkConnector
     */
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }
}
