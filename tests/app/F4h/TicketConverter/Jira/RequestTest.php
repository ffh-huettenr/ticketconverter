<?php

require_once dirname(__FILE__) . '/../../../../../app/F4h/TicketConverter/Jira/Request.php';

/**
 * Test class for F4h_TicketConverter_Jira_Request.
 * Generated by PHPUnit on 2012-01-11 at 13:49:07.
 */
class F4h_TicketConverter_Jira_RequestTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var F4h_TicketConverter_Jira_Request
     */
    protected $object;

    public function initProvider()
    {
        return array(
            array(array(CURLOPT_USERAGENT => 'bla', CURLOPT_URL => 'http://bla'))
        );
    }

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new F4h_TicketConverter_Jira_Request;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers {className}::{origMethodName}
     * @todo Implement testAddOption().
     */
    public function testAddOption()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers F4h_TicketConverter_Jira_Request::init
     * @dataProvider initProvider
     */
    public function testInit($options)
    {
//        // Remove the following lines when you implement this test.
//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
       
        $this->object->init($options);
        foreach ($options as $key => $value) {
            $this->assertArrayHasKey($key, $this->readAttribute($this->object, "options"));
        }
    }

    /**
     * @covers {className}::{origMethodName}
     * @todo Implement testExecute().
     */
    public function testExecute()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers {className}::{origMethodName}
     * @todo Implement testClose().
     */
    public function testClose()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}

?>