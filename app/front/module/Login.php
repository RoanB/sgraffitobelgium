<?php
/**
 * Module Login
 *
 * @author Roan Buysse <roan@tigron.be>
 */

namespace App\Front\Module;

use Skeleton\Application\Web\Module;
use Skeleton\Application\Web\Template;
use Skeleton\Core\Http\Session;

class Login extends Module {

	/**
	 * Login required
	 *
	 * @var $login_required
	 */
	protected bool $login_required = false;

	/**
	 * Template
	 *
	 * @access protected
	 * @var string $template
	 */
	protected ?string $template = 'login.twig';

	/**
	 * Display method.
	 *
	 * @access public
	 */
	public function display(): void {
		$template = Template::get();
		$errors = [];

		if (empty($_POST) === false) {
			$mandatory_fields = ['login', 'password'];

			foreach ($mandatory_fields as $mandatory_field) {
				if (empty($_POST[$mandatory_field]) === true) {
					$errors[$mandatory_field] = 'mandatory';
				}
			}

			if (empty($errors) === false) {
				$template->assign('errors', $errors);
				return;
			}

			try {
				$user = \User::authenticate($_POST['login'], $_POST['password']);
			} catch (\Exception $e) {
				$errors['login'] = 'invalid';
				$errors['password'] = 'invalid';
				$template->assign('errors', $errors);
				return;
			}

			if (isset($_POST['remember'])) {
				setcookie('peppyrus_login', $_POST['login'], time() + (10 * 365 * 24 * 60 * 60));
			} else {
				setcookie('peppyrus_login', $_POST['login'], time() - 3600);
			}

			$_SESSION['user'] = $user;
			if ($user->admin) {
				Session::redirect('/');
			}

			$last_used_organization = null;
			if (empty($_SESSION['user']->last_used_organization_id) === false) {
				$last_used_organization = \Organization::get_by_id($_SESSION['user']->last_used_organization_id);
			}

			if ($last_used_organization !== null && $_SESSION['user']->has_organization($last_used_organization)) {
				$_SESSION['organization'] = $last_used_organization;
				Session::redirect('/');
			}

			$organizations = $user->get_organizations();
			if (count($organizations) > 0) {
				$organization = array_shift($organizations);
				$_SESSION['organization'] = $organization;
				Session::redirect('/');
			}

			if (empty($_SESSION['user']->admin)) {
				unset($_SESSION['user']);
				Session::set_sticky('message', 'no_organization');
				Session::redirect('/login');
			}

		}
	}

	/**
	 * Switch
	 *
	 * @access public
	 */
	public function display_select(): void {
		$organization = \Organization::get_by_id($_GET['id']);
		if ($_SESSION['user']->has_organization($organization)) {
			$_SESSION['user']->last_used_organization_id = $organization->id;
			$_SESSION['user']->save();
			$_SESSION['organization'] = $organization;
		}
		Session::redirect('/');
	}

	/**
	 * Logout
	 *
	 * @access public
	 */
	public function display_logout(): void {
		if (isset($_SESSION['admin_user'])) {
			$_SESSION['user'] = $_SESSION['admin_user'];
			unset($_SESSION['admin_user']);
			if (isset($_SESSION['admin_organization'])) {
				$_SESSION['organization'] = $_SESSION['admin_organization'];
				unset($_SESSION['admin_organization']);
			} else {
				unset($_SESSION['organization']);
			}
			Session::redirect('/');
		}
		Session::Destroy();
		Session::redirect('/');
	}

	/**
	 * Forgot password
	 *
	 * @access public
	 */
	public function display_forgot_password(): void {
		$template = Template::get();
		$errors = [];

		if (isset($_POST['email'])) {
			// TODO: implement password recovery strategy chosen here
			Session::redirect('/login');
		}

		$template->assign('errors', $errors);
	}

	/*
	 * display_verify
	 *
	 * @access public
	 */
	public function display_verify() {
		$user = \User::get_by_uuid($_GET['id']);
		$user->verify();

		Session::set_sticky('message', 'verify_success');
		Session::redirect('/login');
	}
}
