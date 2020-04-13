<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\Twig;

use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TitleTemplate;

/**
 * Class TwigTitleTemplate
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\Twig
 */
class TwigTitleTemplate implements TitleTemplate
{
    /**
     * @return string
     */
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}
