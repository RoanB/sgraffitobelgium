<?php
namespace App\Admin\Module\Actor\Functionality;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Core\Http\Session;

class Detail extends Module {
	protected bool $login_required = true;
	protected ?string $template = 'actor/functionality/detail.twig';

	public function display(): void {
		$actor_functionality = \Actor_Functionality::get_by_id($_GET['id']);

		if (isset($_POST['actor_functionality'])) {
			$data = $_POST['actor_functionality'];
			$actor_functionality->text_en_name = $data['text_en_name'];
			$actor_functionality->text_nl_name = $data['text_nl_name'];
			$actor_functionality->text_fr_name = $data['text_fr_name'];
			$actor_functionality->save();

			Session::set_sticky('message', 'saved');
			Session::redirect('/actor/functionality/detail?id=' . $actor_functionality->id);
		}

		$template = Template::get();
		$template->assign('actor_functionality', $actor_functionality);
	}
}
