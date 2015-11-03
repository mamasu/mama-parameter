<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-02-23 at 11:19:05.
 */
class MmfSessionTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var MmfSession
     */
    protected $object;

    public static function setUpBeforeClass() {
    }

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Mmf\Parameter\Session;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    /**
     * @covers MmfSession::setFlashVar
     * @group parameter
     * @group modules
     * @group development
     * @group production
     */
    public function testSetFlashVar() {
        $value = 'pepito';
        $this->object->setFlashVar('testFlashVar', $value);
        $this->assertEquals($value, $this->object->get('testFlashVar'));
    }

    /**
     * @covers MmfSession::removeFlashVar
     * @group parameter
     * @group modules
     * @group development
     * @group production
     */
    public function testRemoveFlashVar() {
        $value = 'pepito';
        $this->object->setFlashVar('testFlashVar', $value);
        $this->assertEquals($value, $this->object->get('testFlashVar'));
        $this->object->removeFlashVar();
        $this->assertEquals(null, $this->object->get('testFlashVar'));
    }

}