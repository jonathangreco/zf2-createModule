<?php
/**
 * 
 * @package Provider
 * @author Jonathan Greco <jgreco@docsourcing.com>  
 */

namespace ProviderTest\Controller;

use Zend\Http\Request as HttpRequest;
use ProviderTest\ProviderBootstrap;
use Provider\Controller\ProviderController;
use Provider\Service\ProviderService;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class ProviderControllerTest extends AbstractHttpControllerTestCase {

    public function setUp()
    {
        $this->setApplicationConfig(
           include __DIR__ . '../../../../../Application/tests/TestConfig.php.dist'
        );
        parent::setUp();
    }

    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/provider');
        $this->assertMatchedRouteName('Provider');
        $this->assertControllerName('Provider\Controller\Provider');
        $this->assertControllerClass('ProviderController');
        $this->assertModuleName('Provider');
    }
}