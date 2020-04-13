<?php

namespace DesignPatterns\AbstractFactory\ExampleGUI;

use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Button;
use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Checkbox;

/**
 * Class Application
 * @package DesignPatterns\AbstractFactory\ExampleGUI
 */
class Application
{
    /**
     * @var GUIAbstractFactory
     */
    private $GUIAbstractFactory;

    /**
     * @var Button
     */
    private $button;

    /**
     * @var Checkbox
     */
    private $checkbox;

    /**
     * Application constructor.
     * @param GUIAbstractFactory $GUIAbstractFactory
     */
    public function __construct(GUIAbstractFactory $GUIAbstractFactory)
    {
        $this->GUIAbstractFactory = $GUIAbstractFactory;
    }

    /**
     * @return void
     */
    public function createUI(): void
    {
        $this->button = $this->GUIAbstractFactory->createButton();
        $this->checkbox = $this->GUIAbstractFactory->createCheckox();
    }

    public function run(): void
    {
        echo $this->button->paint();

        echo "\n";

        echo $this->checkbox->paint();
    }
}