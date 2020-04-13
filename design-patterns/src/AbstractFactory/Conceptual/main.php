<?php

require_once('../../../vendor/autoload.php');

use DesignPatterns\AbstractFactory\Conceptual\AbstractFactory;
use DesignPatterns\AbstractFactory\Conceptual\ConcreteFactories\ConcreteFactory1;
use DesignPatterns\AbstractFactory\Conceptual\ConcreteFactories\ConcreteFactory2;

/**
 * @param AbstractFactory $factory
 */
function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productB->usefulFunctionB() . "\n";
    echo $productB->anotherUsefulFunctionB($productA) . "\n";
}

/**
 * The client code can work with any concrete factory class.
 */
echo "Client: Testing client code with the first factory type:\n";
clientCode(new ConcreteFactory1);

echo "\n";

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new ConcreteFactory2);
