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
require_once dirname(__FILE__) . '/../../../../../app/F4h/TicketConverter/Dependency/Verifier.php';

/**
 * Test class for F4h_TicketConverter_Dependency_Verifier.
 * Generated by PHPUnit on 2012-01-09 at 14:01:11.
 */
class F4h_TicketConverter_Dependency_VerifierTest extends PHPUnit_Framework_TestCase
{

    protected $goodDependencies = array('xsl', 'curl');
    protected $badDependencies = array('curl', 'sdfsadfsfd');

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
     * @covers F4h_TicketConverter_Dependency_Verifier::checkDependencies
     */
    public function testCheckDependencies()
    {
        //assert that loaded extension return true
        $this->assertTrue(F4h_TicketConverter_Dependency_Verifier::checkDependencies($this->goodDependencies));

        //assert no dependencies return true
        $this->assertTrue(F4h_TicketConverter_Dependency_Verifier::checkDependencies(array()));
        
        //assert that a not loaded extension causes an exception
        $this->assertInternalType($this->setExpectedException('F4h_TicketConverter_Dependency_Exception'), F4h_TicketConverter_Dependency_Verifier::checkDependencies($this->badDependencies));
        
    }
    
}

?>
