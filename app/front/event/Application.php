<?php
/**
 * Event
 *
 * @author Roan Buysse <roan@tigron.be>
 */

namespace App\Front\Event;

use \Skeleton\Database\Database;

class Application extends \Skeleton\Core\Application\Event\Application {

	/**
	 * Start time
	 *
	 * @access private
	 */
	private float $start = 0;

	/**
	 * Bootstrap
	 *
	 * @access public
	 */
	public function bootstrap(): bool {
		$this->start = microtime(true);

		if (isset($_SESSION['pager']) === false) {
			$_SESSION['pager'] = [];
		}

		return true;
	}

	/**
	 * Teardown of the application
	 *
	 * @access private
	 */
	public function teardown(): void {
		$database = Database::get();
		$queries = $database->query_counter;

		$execution_time = microtime(true) - $this->start;

		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$remote_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$remote_ip = $_SERVER['REMOTE_ADDR'];
		}

		$application = \Skeleton\Core\Application::get();
		\Util::log_request('Request: http://' . $application->hostname . $_SERVER['REQUEST_URI'] . ' -- IP: ' . $remote_ip . ' -- Queries: ' . $queries . ' -- Time: ' . $execution_time);
	}
}
