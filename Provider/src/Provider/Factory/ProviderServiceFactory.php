<?php
/**
 * 
 * @package Provider
 * @author Jonathan Greco <jgreco@docsourcing.com>  
 * @author Bastien Hérault <bherault@docsourcing.com>  
 */
 
namespace Provider\Factory;

use Provider\Service\ProviderService;
use Doctrine\Common\Persistence\ObjectManager;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ProviderServiceFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var ObjectManager $objectManager */
        $objectManager = $serviceLocator->get('doctrine.entitymanager.orm_default');
        return new ProviderService($objectManager);
    }
}


