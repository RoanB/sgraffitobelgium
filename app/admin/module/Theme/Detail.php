<?php
namespace App\Admin\Module\Theme;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Core\Http\Session;

class Detail extends Module {
	protected bool $login_required = true;
	protected ?string $template = 'theme/detail.twig';

	public function display(): void {
		$theme = \Theme::get_by_id($_GET['id']);

		if (isset($_POST['theme'])) {
			$data = $_POST['theme'];
			$theme->text_en_name = $data['text_en_name'];
			$theme->text_nl_name = $data['text_nl_name'];
			$theme->text_fr_name = $data['text_fr_name'];
			$theme->save();

			Session::set_sticky('message', 'saved');
			Session::redirect('/theme/detail?id=' . $theme->id);
		}

		$template = Template::get();
		$template->assign('theme', $theme);
	}
}
