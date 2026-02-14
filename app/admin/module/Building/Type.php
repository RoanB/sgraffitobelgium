<?php
/**
 * Web Module Administrative Invoice
 *
 * @author Hassan Ahmed <hassan@tigron.be>
 * @author David Vandemaele <david@tigron.be>
 */

namespace App\Admin\Module\Building;

use Invoice_Method;
use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Core\Http\Session;
use \Skeleton\Pager\Web\Pager;

class Type extends Module {
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
	protected ?string $template = 'building/type.twig';

	/**
	 * Display method
	 *
	 * @access public
	 */
	public function display(): void {
		$pager = new Pager('building_type');
		$pager->add_sort_permission('created');
		$pager->add_sort_permission('number');
		$pager->add_sort_permission('customer.lastname');
		$pager->add_sort_permission('customer.company');
		$pager->add_sort_permission('price_incl');
		$pager->add_sort_permission('price_excl');
		$pager->add_sort_permission('paid');
		$pager->add_join('invoice_item', 'invoice_id', 'invoice.id');
		$pager->set_direction('desc');

		if (isset($_POST['search'])) {
			$pager->set_search($_POST['search']);
		}

		if (empty($_GET['expired']) === false) {
			$pager->clear_conditions();
			$_POST['filter']['till_expiration'] = (new \DateTime())->format('Y-m-d');
		}

		// $pager->add_condition('organization_id', '=', $_SESSION['organization']->id);
		// if (empty($_POST['filter']['from']) === false) {
		// 	$pager->add_condition('created', '>=', date('Y-m-d H:i:s', strtotime($_POST['filter']['from'] . ' 00:00:00')));
		// }

		// if (empty($_POST['filter']['till']) === false) {
		// 	$pager->add_condition('created', '<=', date('Y-m-d H:i:s', strtotime($_POST['filter']['till'] . ' 23:59:59')));
		// }

		// if (empty($_POST['filter']['from_expiration']) === false) {
		// 	$pager->add_condition('expiration_date', '>=', date('Y-m-d H:i:s', strtotime($_POST['filter']['from_expiration'] . ' 00:00:00')));
		// }

		// if (empty($_POST['filter']['till_expiration']) === false) {
		// 	$pager->add_condition('expiration_date', '<=', date('Y-m-d H:i:s', strtotime($_POST['filter']['till_expiration'] . ' 23:59:59')));
		// }

		// if (isset($_REQUEST['paid']) && $_REQUEST['paid'] != 'none') {
		// 	$pager->add_condition('paid', $_REQUEST['paid']);
		// }

		// if (isset($_POST['customer_uuid']) AND $_POST['customer_uuid'] != '') {
		// 	$pager->add_condition('customer.uuid', $_POST['customer_uuid']);
		// } else {
		// 	$pager->clear_condition('customer.uuid');
		// }
		$pager->page();

		// $conditions = $pager->get_conditions();
		// $filter = $this->get_filter($conditions);
		// if (empty($conditions['invoice.created']) === false) {
		// 	foreach ($conditions['invoice.created'] as $created) {
		// 		if ($created->get_comparison() === '>=') {
		// 			$from = $created->get_value();
		// 			$filter['from'] = array_shift($from);
		// 			continue;
		// 		}

		// 		if ($created->get_comparison() === '<=') {
		// 			$till= $created->get_value();
		// 			$filter['till'] = array_shift($till);
		// 			continue;
		// 		}
		// 	}
		// }

		// if (empty($conditions['invoice.expiration_date']) === false) {
		// 	foreach ($conditions['invoice.expiration_date'] as $created) {
		// 		if ($created->get_comparison() === '>=') {
		// 			$from = $created->get_value();
		// 			$filter['from_expiration'] = array_shift($from);
		// 			continue;
		// 		}

		// 		if ($created->get_comparison() === '<=') {
		// 			$till= $created->get_value();
		// 			$filter['till_expiration'] = array_shift($till);
		// 			continue;
		// 		}
		// 	}
		// }

		$template = Template::get();
		$template->assign('pager', $pager);
		// $template->assign('filter', $filter);
	}

	// /**
	//  * Secure
	//  *
	//  * @access public
	//  */
	// public function secure(): bool {
	// 	if ($_SESSION['user']->has_permission('admin.invoice') === false) {
	// 		return false;
	// 	}

	// 	return true;
	// }
}
