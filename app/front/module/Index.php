<?php
/**
 * Module Index
 *
 * @author Lionel Laffineur <lionel@tigron.be>
 */

namespace App\Front\Module;

use Skeleton\Application\Web\Module;
use Skeleton\Application\Web\Template;

class Index extends Module {

	/**
	 * Login required
	 *
	 * @var $login_required
	 */
	protected bool $login_required = true;

	/**
	 * Template
	 *
	 * @access protected
	 * @var string $template
	 */
	protected ?string $template = 'index.twig';

	/**
	 * Display method.
	 *
	 * @access public
	 */
	public function display(): void {
		$template = Template::get();
		$config = \Skeleton\Core\Config::get();
	}
}
