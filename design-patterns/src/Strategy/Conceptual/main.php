<?php

require_once('../../../vendor/autoload.php');

use DesignPatterns\Strategy\Conceptual\Context;
use DesignPatterns\strategy\Conceptual\Strategies\ConcreteStrategyA;
use DesignPatterns\strategy\Conceptual\Strategies\ConcreteStrategyB;

/**
 * The client code picks a concrete Strategy and passes it to the context. The
 * client should be aware of the differences between strategies in order to make
 * the right choice.
 */
$context = new Context(new ConcreteStrategyA);
echo "Client: Strategy is set to normal sorting.\n";
$context->doSomeBusinessLogic();

echo "\n";

echo "Client: Strategy is set to reverse sorting.\n";
$context->setStrategy(new ConcreteStrategyB);
$context->doSomeBusinessLogic();