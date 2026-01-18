<?php

declare(strict_types=1);

/**
 * Event
 *
 * @author Lionel Laffineur <lionel@tigron.be>
 */

namespace App\Admin\Event;

use Skeleton\Core\Http\Session;

class Module extends \Skeleton\Application\Web\Event\Module {
	/**
	 * Bootstrap the module
	 *
	 * @access public
	 * @param \Skeleton\Application\Web\Module $module
	 */
	public function bootstrap(\Skeleton\Application\Web\Module $module): void {
		$template = \Skeleton\Application\Web\Template::get();

		// // Bootstrap the application
		// if ($module->is_login_required()) {
		// 	if (isset($_SESSION['user']) === false) {
		// 		Session::destroy();
		// 		Session::start();

		// 		if (isset($_SERVER['REQUEST_URI'])) {
		// 			$_SESSION['redirect_uri'] = $_SERVER['REQUEST_URI'];
		// 		}

		// 		Session::redirect('/login');
		// 	}
		// }

		if (isset($_SESSION['user'])) {
			$template->assign('user', $_SESSION['user']);
		}

		if (isset($_SESSION['admin_user']) === true) {
			$template->assign('admin_user', $_SESSION['admin_user']);
		}

		\Language::set($_SESSION['language']);
		if (is_callable([ $module, 'secure' ])) {
			$allowed = $module->secure();

			if ($allowed === false) {
				Session::redirect('/authorization/not/authorized');
			}
		}

		if (isset($_GET['action']) === true) {
			$template->assign('action', $_GET['action']);
		}

		$template->assign('languages', \Language::get_all());

		// Assign the sticky session object to our template
		$sticky_session = new \Skeleton\Core\Http\Session\Sticky();
		$template->add_environment('sticky_session', $sticky_session);

		$template->assign('environment', \Skeleton\Core\Config::get()->environment);
	}
}
