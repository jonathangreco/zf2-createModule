<?php
/**
 * 
 * @package Provider
 * @author Jonathan Greco <jgreco@docsourcing.com>  
 * @author Bastien Hérault <bherault@docsourcing.com>  
 */
 
namespace Provider\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Provider\Entity\Provider;
use Provider\Service\ProviderService;

class ProviderController extends AbstractActionController
{
    /**
     * @var Provider\Service\ProviderService
     */ 
    private $Provider;

    public function __construct(ProviderService $ProviderService)
    {
        $this->Provider = $ProviderService;
    }

    /**
     * Affiche les Factures selon leur status
     */ 
    public function indexAction()
    {
       
    }
}