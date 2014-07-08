<?php

namespace ApplicationTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class ApplicationControllerTest extends AbstractHttpControllerTestCase
{
    protected $traceError = true;
    
    public function setUp()
    {
        /*$this->setApplicationConfig(
            include '../../../config/application.config.php'
        );*/
        parent::setUp();
    }
    
    public function testIndexActionCanBeAccessed()
    {
        $this->assertTrue(true);
    }
    
    public function testIsValidJSONCanBeAccessed()
    {
        $json = '{"foo":1}';
        
        
        $this->assertNotNull(json_decode($json));
    }
}