<?php
/**
 * 
 * @package Provider
 * @author Jonathan Greco <jgreco@docsourcing.com>  
 * @author Bastien Hérault <bherault@docsourcing.com>  
 */
namespace Provider\Factory;

use Provider\Controller\ProviderController;
use Provider\Service\ProviderService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ProviderControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $parentLocator = $serviceLocator->getServiceLocator();

        /** @var ProviderService $ProviderService */
        $ProviderService = $parentLocator->get('Provider\Service\Provider');
        return new ProviderController($ProviderService);
    }
}
