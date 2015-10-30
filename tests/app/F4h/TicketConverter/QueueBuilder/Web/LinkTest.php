<?php
/**
 * This file is part of Ticketconverter.
 *
 * @category developer tool
 * @package ticketconverter-tests
 *
 * @author Christoph Jaecks <christoph.jaecks@fashionforhome.de>
 * @author Claudia Hüttenrauch <claudia.hüttenrauch@fashionforhome.de>
 * @author Tino Stöckel <tino.stoeckel@fashionforhome.de>
 *
 * @copyright (c) 2012 by fashion4home GmbH <www.fashionforhome.de>
 * @license GPL-3.0
 * @license http://opensource.org/licenses/GPL-3.0 GNU GENERAL PUBLIC LICENSE
 *
 * @version 1.0.0
 *
 * Date: 30.10.2015
 * Time: 01:30
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
require_once dirname(__FILE__) . '/../../../../../../app/F4h/TicketConverter/QueueBuilder/Web/Link.php';

/**
 * Test class for F4h_TicketConverter_QueueBuilder_Web_Link.
 * Generated by PHPUnit on 2012-01-06 at 17:43:27.
 */
class F4h_TicketConverter_QueueBuilder_Web_LinkTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var F4h_TicketConverter_QueueBuilder_Web_Link
     */
    protected $object;

    public function provider()
    {
        return array(
            //valid url
            array('https://fashion4home.jira.com/sr/jira.issueviews:searchrequest-xml/temp/SearchRequest.xml?jqlQuery=project+%3D+DMF+AND+issuetype+%3D+%22New+Feature%22+AND+status+%3D+%22In+Progress%22&tempMax=1000', 'F4h_TicketConverter_Model_Queue'),
            //invalid url
            array('bla', 'Exception'),
        );
    }
    
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers F4h_TicketConverter_QueueBuilder_Web_Link::build
     * @dataProvider provider
     */
    public function testBuild($input, $expected)
    {
        $this->object = new F4h_TicketConverter_QueueBuilder_Web_Link($input);

        if ($expected === 'Exception') {
            $this->assertInternalType($this->setExpectedException('InvalidArgumentException'), $this->object->build());
        } else {
            $this->assertInstanceOf($expected, $this->object->build());
        }
    }

}

?>

