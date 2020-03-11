<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements;

/**
 * Interface TitleTemplate
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements
 */
interface TitleTemplate
{
    /**
     * @return string
     */
    public function getTemplateString(): string;
}
