<?php
/**
 * This file is part of Ticketconverter.
 *
 * @category developer tool
 * @package ticketconverter
 *
 * @author Christoph Jaecks <christoph.jaecks@fashionforhome.de>
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

/**
 * Class F4h_TicketConverter_Model_Resource_Ticket_Collection
 */
class F4h_TicketConverter_Model_Resource_Ticket_Collection extends F4h_TicketConverter_Model_Resource_Collection
{

	const TABLENAME = 'tickets_printed';
	protected $_columns = array('project', 'ticket_id');

	/**
	 * @return mixed
	 */
	protected function _load()
	{
		$connection = $this->getConnection();
		$query = $connection->prepare($this->_getQueryString());
		$query->execute();

		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	/**
	 * @return PDO
	 */
	protected function _getConnection()
	{
		return F4h_TicketConverter_Model_Db_Sqlite::getConnection();
	}

}