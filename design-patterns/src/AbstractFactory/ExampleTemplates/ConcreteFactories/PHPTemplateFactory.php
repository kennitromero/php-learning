<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteFactories;

use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\PageTemplate;
use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TemplateRenderer;
use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TitleTemplate;
use DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\PHP\PHPTemplatePageTemplate;
use DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\PHP\PHPTemplateRenderer;
use DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\PHP\PHPTemplateTitleTemplate;
use DesignPatterns\AbstractFactory\ExampleTemplate\TempateAbstractFactory;

/**
 * Class PHPTemplateFactory
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteFactories
 */
class PHPTemplateFactory implements TempateAbstractFactory
{
    /**
     * @return TitleTemplate
     */
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate;
    }

    /**
     * @return PageTemplate
     */
    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    /**
     * @return TemplateRenderer
     */
    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}
