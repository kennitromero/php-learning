<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\Twig;

use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TemplateRenderer;

/**
 * Class TwigRenderer
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\Twig
 */
class TwigRenderer implements TemplateRenderer
{
    /**
     * @param string $templateString
     * @param array $arguments
     * @return string
     */
    public function render(string $templateString, array $arguments = []): string
    {
        return \Twig::render($templateString, $arguments);
    }
}
