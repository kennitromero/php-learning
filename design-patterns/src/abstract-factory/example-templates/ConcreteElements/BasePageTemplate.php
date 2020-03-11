<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements;

use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\PageTemplate;
use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TitleTemplate;

/**
 * Class BasePageTemplate
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements
 */
abstract class BasePageTemplate implements PageTemplate
{
    /**
     * @var TitleTemplate
     */
    protected $titleTemplate;

    /**
     * BasePageTemplate constructor.
     * @param TitleTemplate $titleTemplate
     */
    public function __construct(TitleTemplate $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}
