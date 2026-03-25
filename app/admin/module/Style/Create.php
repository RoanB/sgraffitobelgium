<?php
namespace App\Admin\Module\Style;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Core\Http\Session;

class Create extends Module {
	protected bool $login_required = true;
	protected ?string $template = 'style/create.twig';

	public function display(): void {
		$style = new \Style();

		if (isset($_POST['style'])) {
			$data = $_POST['style'];
			$style->identifier = $data['identifier'];
			$style->text_en_name = $data['text_en_name'];
			$style->text_nl_name = $data['text_nl_name'];
			$style->text_fr_name = $data['text_fr_name'];
			$style->save();

			Session::set_sticky('message', 'created');
			Session::redirect('/style/detail?id=' . $style->id);
		}

		$template = Template::get();
		$template->assign('style', $style);
	}
}
