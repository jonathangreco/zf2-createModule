<?php
/**
 * 
 * @package Provider
 * @author Jonathan Greco <jgreco@docsourcing.com>
 * @author Bastien Hérault <bherault@docsourcing.com>  
 */
 
namespace Provider\Service;


use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use Doctrine\Common\Persistence\ObjectManager;

//use Provider\Entity\Provider;

class ProviderService implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;

    public function __construct(ToolboxService $toolbox)
    {
        $this->toolboxService = $toolbox;
        $this->myLinkUn = $this->toolboxService->getMyLinkUn();
        $this->dao = $this->toolboxService->getDao();
    }
}