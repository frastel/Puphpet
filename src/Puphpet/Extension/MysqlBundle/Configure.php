<?php

namespace Puphpet\Extension\MysqlBundle;

use Puphpet\MainBundle\Extension;

use Puphpet\MainBundle\Rendering\TemplateRenderer;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Configure extends Extension\ExtensionAbstract
{

    /**
     * @var TemplateRenderer
     */
    protected $manifestRenderer;

    /**
     * @param Container $container
     * @param TemplateRenderer $manifestRenderer
     */
    public function __construct(Container $container, TemplateRenderer $manifestRenderer)
    {
        $this->dataLocation = __DIR__ . '/Resources/config';
        $this->name = 'MySQL';
        $this->slug = 'mysql';
        $this->targetFile = 'puppet/manifests/default.pp';
        $this->sources = [
            'mysql' => ":git => 'git://github.com/puphpet/puppetlabs-mysql.git'",
        ];
        $this->manifestRenderer = $manifestRenderer;

        parent::__construct($container);
    }

    public function getFrontController()
    {
        return $this->container->get('puphpet.extension.mysql.front_controller');
    }

    /**
     * @deprecated use self::getManifestRenderer instead
     */
    public function getManifestController()
    {
        return $this->getManifestRenderer(); // $this->container->get('puphpet.extension.mysql.manifest_controller');
    }

    public function getManifestRenderer()
    {
        return $this->manifestRenderer;
    }
}
