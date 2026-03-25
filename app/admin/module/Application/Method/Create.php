<?php
namespace App\Admin\Module\Application\Method;

use \Skeleton\Application\Web\Template;
use \Skeleton\Application\Web\Module;
use \Skeleton\Core\Http\Session;

class Create extends Module {
	protected bool $login_required = true;
	protected ?string $template = 'application/method/create.twig';

	public function display(): void {
		$application_method = new \Application_Method();

		if (isset($_POST['application_method'])) {
			$data = $_POST['application_method'];
			$application_method->identifier = $data['identifier'];
			$application_method->text_en_name = $data['text_en_name'];
			$application_method->text_nl_name = $data['text_nl_name'];
			$application_method->text_fr_name = $data['text_fr_name'];
			$application_method->save();

			Session::set_sticky('message', 'created');
			Session::redirect('/application/method/detail?id=' . $application_method->id);
		}

		$template = Template::get();
		$template->assign('application_method', $application_method);
	}
}
