<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\PHP;

use DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\BasePageTemplate;

/**
 * Class PHPTemplatePageTemplate
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\PHP
 */
class PHPTemplatePageTemplate extends BasePageTemplate
{
    /**
     * @return string
     */
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content"><?= \$content; ?></article>
        </div>
        HTML;
    }
}