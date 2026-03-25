<?php
/**
 * Web Module Administrative Building
 *
 * @author Roan Buysse <roan@tigron.be>
 */

namespace App\Admin\Module;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Pager\Web\Pager;

class Building extends Module {
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
	protected ?string $template = 'building.twig';

	/**
	 * Display method
	 *
	 * @access public
	 */
	public function display(): void {
		$pager = new Pager('building');
		$pager->add_sort_permission('name');
		$pager->add_sort_permission('city');
		$pager->add_sort_permission('street');
		$pager->add_sort_permission('created');

		if (isset($_POST['search'])) {
			$pager->set_search($_POST['search']);
		}

		$pager->page();

		$template = Template::get();
		$template->assign('pager', $pager);
	}
}
