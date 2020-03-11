<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements;

/**
 * Interface TemplateRenderer
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements
 */
interface TemplateRenderer
{
    /**
     * @param string $templateString
     * @param array $arguments
     * @return string
     */
    public function render(string $templateString, array $arguments = []): string;
}
