<?php

use Album\Model\Album,
    Zend\InputFilter\InputFilterInterface;

class AlbumTest extends \PHPUnit_Framework_TestCase
{
    protected $a;

    public function setUp()
    {
        $this->a = new Album;
    }

    /**
     * @expectedException Album\Model\AlbumException
     * @expectedExceptionMessage Not used
     */
    public function testSetInputFilter()
    {
        $if = $this->getMock('Zend\InputFilter\InputFilterInterface');
        $this->a->setInputFilter($if);
    }
 
    public function testGetInputFilter()
    {
        $if = $this->a->getInputFilter();
 
        $this->assertInstanceOf("Zend\InputFilter\InputFilter", $if);
        return $if;
    }
 
    /**
     * @depends testGetInputFilter
     */
    public function testInputFilterValid($if)
    {
        $this->assertEquals(3, $if->count());
 
        $this->assertTrue($if->has('title'));
        $this->assertTrue($if->has('artist'));
        $this->assertTrue($if->has('id'));
    }
}
