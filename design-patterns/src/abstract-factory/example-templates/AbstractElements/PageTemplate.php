<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements;

/**
 * Interface PageTemplate
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements
 */
interface PageTemplate
{
    /**
     * @return string
     */
    public function getTemplateString(): string;
}
