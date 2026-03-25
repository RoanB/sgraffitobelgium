<?php
namespace App\Admin\Module\Theme;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Core\Http\Session;

class Create extends Module {
	protected bool $login_required = true;
	protected ?string $template = 'theme/create.twig';

	public function display(): void {
		$theme = new \Theme();

		if (isset($_POST['theme'])) {
			$data = $_POST['theme'];
			$theme->identifier = $data['identifier'];
			$theme->text_en_name = $data['text_en_name'];
			$theme->text_nl_name = $data['text_nl_name'];
			$theme->text_fr_name = $data['text_fr_name'];
			$theme->save();

			Session::set_sticky('message', 'created');
			Session::redirect('/theme/detail?id=' . $theme->id);
		}

		$template = Template::get();
		$template->assign('theme', $theme);
	}
}
