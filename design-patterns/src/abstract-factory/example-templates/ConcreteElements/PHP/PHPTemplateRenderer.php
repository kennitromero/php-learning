<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\PHP;

use DesignPatterns\AbstractFactory\ExampleTemplate\AbstractElements\TemplateRenderer;

/**
 * Class PHPTemplateRenderer
 * @package DesignPatterns\AbstractFactory\ExampleTemplate\ConcreteElements\PHP
 */
class PHPTemplateRenderer implements TemplateRenderer
{
    /**
     * @param string $templateString
     * @param array $arguments
     * @return string
     */
    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);

        ob_start();
        eval(' ?>' . $templateString . '<?php ');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}
