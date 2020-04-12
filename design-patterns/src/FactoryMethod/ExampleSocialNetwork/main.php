<?php

require_once('../../../vendor/autoload.php');

use DesignPatterns\FactoryMethod\ExampleSocialNetwork\Posters\FacebookPoster;
use DesignPatterns\FactoryMethod\ExampleSocialNetwork\Posters\LinkedInPoster;
use DesignPatterns\FactoryMethod\ExampleSocialNetwork\SocialNetworkPoster;

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 * @param SocialNetworkPoster $creator
 */
function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));