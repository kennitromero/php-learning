<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\Twig;

use DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\BasePageTemplate;

/**
 * Class TwigPageTemplate
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\Twig
 */
class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}