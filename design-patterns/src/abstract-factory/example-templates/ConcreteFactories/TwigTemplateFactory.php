<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteFactories;

use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\PageTemplate;
use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TemplateRenderer;
use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TitleTemplate;
use DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\Twig\TwigPageTemplate;
use DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\Twig\TwigRenderer;
use DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\Twig\TwigTitleTemplate;
use DesignPatterns\AbstractFactory\ExampleTemplate\TempateAbstractFactory;

/**
 * Class TwigTemplateFactory
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteFactories
 */
class TwigTemplateFactory implements TempateAbstractFactory
{
    /**
     * @return TitleTemplate
     */
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate;
    }

    /**
     * @return PageTemplate
     */
    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    /**
     * @return TemplateRenderer
     */
    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}
