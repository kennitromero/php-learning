<?php

use DesignPatterns\AbstractFactory\ExampleGUI\Application;
use DesignPatterns\AbstractFactory\ExampleGUI\GUIAbstractFactory;
use DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts\MacFactory;
use DesignPatterns\AbstractFactory\ExampleGUI\ConcreteProducts\WinFactory;

require_once('vendor/autoload.php');

const OS_MAC = "Mac";
const OS_WIN = "Win";

const OS = "Mac";

/**
 * @throws Exception
 */
function run(): GUIAbstractFactory
{
    if (OS === OS_MAC) {
        return new MacFactory();
    } else {
        if (OS === OS_WIN) {
            return new WinFactory();
        } else {
            throw new Exception("Error! Unknown operating system.");
        }
    }
}

try {
    $factory = run();

    $app = new Application($factory);

    $app->createUI();

    $app->run();

} catch (Exception $e) {
    echo $e->getMessage();
}