<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate;

use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\PageTemplate;
use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TemplateRenderer;
use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TitleTemplate;

/**
 * Interface TempateAbstractFactory
 * @package DesignPatterns\AbstractFactory\ExampleGUI
 */
interface TempateAbstractFactory
{
    /**
     * @return TitleTemplate
     */
    public function createTitleTemplate(): TitleTemplate;

    /**
     * @return PageTemplate
     */
    public function createPageTemplate(): PageTemplate;

    /**
     * @return TemplateRenderer
     */
    public function getRenderer(): TemplateRenderer;
}
