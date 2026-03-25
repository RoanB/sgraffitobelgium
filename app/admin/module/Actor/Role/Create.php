<?php
namespace App\Admin\Module\Actor\Role;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Core\Http\Session;

class Create extends Module {
	protected bool $login_required = true;
	protected ?string $template = 'actor/role/create.twig';

	public function display(): void {
		$actor_role = new \Actor_Role();

		if (isset($_POST['actor_role'])) {
			$data = $_POST['actor_role'];
			$actor_role->identifier = $data['identifier'];
			$actor_role->text_en_name = $data['text_en_name'];
			$actor_role->text_nl_name = $data['text_nl_name'];
			$actor_role->text_fr_name = $data['text_fr_name'];
			$actor_role->save();

			Session::set_sticky('message', 'created');
			Session::redirect('/actor/role/detail?id=' . $actor_role->id);
		}

		$template = Template::get();
		$template->assign('actor_role', $actor_role);
	}
}
