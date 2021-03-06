<?php
/**
 * Test: IPub\Gravatar\Libraries
 * @testCase
 *
 * @copyright      More in license.md
 * @license        https://www.ipublikuj.eu
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 * @package        iPublikuj:Gravatar!
 * @subpackage     Tests
 * @since          2.1.1
 *
 * @date           15.01.17
 */

declare(strict_types = 1);

namespace IPubTests\Gravatar\Libs;

use Nette;
use Nette\Application;
use Nette\Application\Routers;

/**
 * Simple routes factory
 *
 * @package        iPublikuj:Gravatar!
 * @subpackage     Tests
 *
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 */
class RouterFactory
{
	/**
	 * @return Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new Routers\RouteList();
		$router[] = new Routers\Route('<presenter>/<action>[/<id>]', 'Test:default');

		return $router;
	}
}
