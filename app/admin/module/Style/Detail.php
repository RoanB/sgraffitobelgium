<?php
namespace App\Admin\Module\Style;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Core\Http\Session;

class Detail extends Module {
	protected bool $login_required = true;
	protected ?string $template = 'style/detail.twig';

	public function display(): void {
		$style = \Style::get_by_id($_GET['id']);

		if (isset($_POST['style'])) {
			$data = $_POST['style'];
			$style->text_en_name = $data['text_en_name'];
			$style->text_nl_name = $data['text_nl_name'];
			$style->text_fr_name = $data['text_fr_name'];
			$style->save();

			Session::set_sticky('message', 'saved');
			Session::redirect('/style/detail?id=' . $style->id);
		}

		$template = Template::get();
		$template->assign('style', $style);
	}
}
