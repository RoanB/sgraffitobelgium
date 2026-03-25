<?php
/**
 * Web Module Administrative Building Type Detail
 *
 * @author Roan Buysse <roan@tigron.be>
 */

namespace App\Admin\Module\Building\Type;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Core\Http\Session;

class Detail extends Module {
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
	protected ?string $template = 'building/type/detail.twig';

	/**
	 * Display method
	 *
	 * @access public
	 */
	public function display(): void {
		$building_type = \Building_Type::get_by_id($_GET['id']);

		if (isset($_POST['building_type'])) {
			$data = $_POST['building_type'];
			$building_type->text_en_name = $data['text_en_name'];
			$building_type->text_nl_name = $data['text_nl_name'];
			$building_type->text_fr_name = $data['text_fr_name'];
			$building_type->save();

			Session::set_sticky('message', 'saved');
			Session::redirect('/building/type/detail?id=' . $building_type->id);
		}

		$template = Template::get();
		$template->assign('building_type', $building_type);
	}
}
