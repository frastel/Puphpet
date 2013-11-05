<?php

namespace Puphpet\MainBundle\Rendering;

use Symfony\Component\Templating\EngineInterface;

class TemplateRenderer
{
    /**
     * @var EngineInterface
     */
    private $templating;

    /**
     * @var string
     */
    private $templateFile;

    /**
     * @param EngineInterface $templating
     * @param string $templateFile
     */
    public function __construct(EngineInterface $templating, $templateFile = null)
    {
        $this->templating = $templating;
        $this->templateFile = $templateFile;
    }

    /**
     * Setter injection for better service definition
     *
     * @param string $templateFile
     */
    public function setTemplateFile($templateFile)
    {
        $this->templateFile = $templateFile;
    }

    /**
     * Renders a template with given parameters
     *
     * @param array $parameters
     *
     * @return string
     */
    public function render(array $parameters = array())
    {
        return $this->templating->render($this->templateFile, $parameters);
    }

    /**
     * BC for old extensions
     *
     * @deprecated use self::render instead
     *
     * @param array $parameters
     *
     * @return string
     */
    public function indexAction(array $parameters = array())
    {
        return $this->render($parameters);
    }
}
