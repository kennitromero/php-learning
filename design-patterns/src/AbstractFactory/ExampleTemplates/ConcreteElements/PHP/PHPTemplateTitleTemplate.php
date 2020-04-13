<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\PHP;

use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TitleTemplate;

/**
 * Class PHPTemplateTitleTemplate
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\PHP
 */
class PHPTemplateTitleTemplate implements TitleTemplate
{
    /**
     * @return string
     */
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}
