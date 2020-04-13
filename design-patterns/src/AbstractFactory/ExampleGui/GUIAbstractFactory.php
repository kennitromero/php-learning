<?php

namespace DesignPatterns\AbstractFactory\ExampleGUI;

use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Button;
use DesignPatterns\AbstractFactory\ExampleGUI\UIAbstractProducts\Checkbox;

/**
 * Interface GUIAbstractFactory
 * @package DesignPatterns\GUIAbstractFactory\ExampleGUI
 */
interface GUIAbstractFactory
{
    /**
     * @return Button
     */
    public function createButton(): Button;

    /**
     * @return Checkbox
     */
    public function createCheckox(): Checkbox;
}
