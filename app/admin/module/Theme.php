<?php
/**
 * Web Module Administrative Theme
 *
 * @author Roan Buysse <roan@tigron.be>
 */

namespace App\Admin\Module;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Pager\Web\Pager;

class Theme extends Module {
	/**
	 * Login required
	 *
	 * @access protected
	 * @var bool $login_required
	 */
	protected bool $login_required = true;

	/**
	 * Template
	 *
	 * @access protected
	 * @var string $template
	 */
	protected ?string $template = 'theme.twig';

	/**
	 * Display method
	 *
	 * @access public
	 */
	public function display(): void {
		$pager = new Pager('theme');
		$pager->add_sort_permission('identifier');
		$pager->add_sort_permission('created');

		if (isset($_POST['search'])) {
			$pager->set_search($_POST['search']);
		}

		$pager->page();

		$template = Template::get();
		$template->assign('pager', $pager);
	}
}
