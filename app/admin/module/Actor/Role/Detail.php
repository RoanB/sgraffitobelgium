<?php
namespace App\Admin\Module\Actor\Role;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Core\Http\Session;

class Detail extends Module {
	protected bool $login_required = true;
	protected ?string $template = 'actor/role/detail.twig';

	public function display(): void {
		$actor_role = \Actor_Role::get_by_id($_GET['id']);

		if (isset($_POST['actor_role'])) {
			$data = $_POST['actor_role'];
			$actor_role->text_en_name = $data['text_en_name'];
			$actor_role->text_nl_name = $data['text_nl_name'];
			$actor_role->text_fr_name = $data['text_fr_name'];
			$actor_role->save();

			Session::set_sticky('message', 'saved');
			Session::redirect('/actor/role/detail?id=' . $actor_role->id);
		}

		$template = Template::get();
		$template->assign('actor_role', $actor_role);
	}
}
