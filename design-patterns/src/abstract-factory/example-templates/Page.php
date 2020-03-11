<?php

namespace DesignPatterns\AbstractFactory\ExampleTemplate;

/**
 * Class Page
 * @package DesignPatterns\AbstractFactory\ExampleTemplate
 */
class Page
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $content;

    /**
     * Page constructor.
     * @param string $title
     * @param string $content
     */
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    // Here's how would you use the template further in real life. Note that the
    // page class does not depend on any concrete template classes.
    public function render(TempateAbstractFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }
}
