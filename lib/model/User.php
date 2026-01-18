<?php
/**
 * User
 *
 * @author Roan Buysse <roan@tigron.be>
 */

use \Skeleton\Database\Database;

class User {
	use \Skeleton\Object\Model {
		__set as trait_set;
	}
	use \Skeleton\Object\Uuid;
	use \Skeleton\Object\Get;
	use \Skeleton\Object\Save;
	use \Skeleton\Object\Delete;
	use \Skeleton\Pager\Page;

	/**
	 * Set
	 *
	 * @access public
	 */
	public function __set($key, $value) {
		if ($key == 'password') {
			$this->set_password($value);
		} else {
			$this->trait_set($key, $value);
		}
	}

	/**
	 * validate
	 *
	 * @access public
	 * @param array $errors
	 * @return bool
	 */
	public function validate(array &$errors = []): bool {
		$errors = [];
		$mandatories = [ 'email', 'firstname', 'lastname', 'street', 'housenumber', 'zipcode', 'city', 'country_id' ];
		$mandatories_admin = [ 'email', 'password' ];

		if (isset($this->admin) && $this->admin) {
			$mandatories = $mandatories_admin;
		}

		foreach ($mandatories as $mandatory) {
			if (empty($this->$mandatory) === true) {
				$errors[$mandatory] = 'mandatory';
			}
		}

		if (isset($this->email)) {
			try {
				$user = self::get_by_email($this->email);
				if (!isset($this->id) or $this->id !== $user->id) {
					$errors['email'] = 'duplicate';
				}
			} catch (\Exception $e) { }
		}

		if (
			empty($this->phone) === false
			&& empty($this->country_id) === false
			&& Validation::phone($this->phone, $this->country, true) === false
		) {
			$errors['phone'] = 'invalid';
		}

		if (
			empty($this->zipcode) === false
			&& empty($this->country_id) === false
			&& Validation::zipcode($this->zipcode, $this->country) === false
		) {
			$errors['zipcode'] = 'invalid';
		}

		return count($errors) === 0;
	}

	/**
	 * get organizations
	 *
	 * @access public
	 * @return array
	 */
	public function get_organizations(): array {
		$results = [];
		$organization_users = \Organization_User::get_by_user($this);
		foreach ($organization_users as $organization_user) {
			$results[] = $organization_user->organization;
		}
		return $results;
	}

	/**
	 * has organization
	 *
	 * @access public
	 * @param Organization $organization
	 * @return bool
	 */
	public function has_organization(Organization $organization): bool {
		try {
			Organization_User::get_by_organization_user($organization, $this);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	/**
	 * get organization user
	 *
	 * @access public
	 * @param Organization $organization
	 * @return Organization_User
	 */
	public function get_organization_user(Organization $organization): Organization_User {
		return \Organization_User::get_by_organization_user($organization, $this);
	}

	/**
	 * set_password
	 *
	 * @access public
	 * @param string $password
	 */
	public function set_password(string $password): void {
		if (Validation::password($password) === false) {
			Syslog::write('User ' . $this->email . ' set password failed', Syslog::LOG_TYPE_WARNING);
			throw new Exception("Password not strong enough");
		}

		$this->details['password'] = password_hash($password, PASSWORD_DEFAULT);
	}

	/**
	 * validate_password
	 *
	 * @access public
	 * @param string $password
	 * @return bool
	 */
	public function validate_password(string $password): bool {
		return password_verify($password, $this->password);
	}

	/**
	 * send_verify_email
	 *
	 * @access public
	 */
	public function send_verify_email() {
		$transaction = new Transaction_Email_User_Verify();
		$transaction->data = ['user_id' => $this->id];
		$transaction->schedule();
	}

	/**
	 * verify
	 *
	 * @access public
	 * @return void
	 */
	public function verify(): void {
		$this->verified = true;
		$this->save(false);
	}

	/**
	 * reset_password
	 *
	 * @access public
	 */
	public function reset_password() {
		// $transaction = new Transaction_Email_User_Password_Reset();
		// $transaction->data = ['user_id' => $this->id];
		// $transaction->schedule();
	}

	/**
	 * get admin by email
	 *
	 * @access public
	 * @param string $email
	 * @return User
	 */
	public static function get_by_email(string $email): \User {
		$db = Database::get();
		$id = $db->get_one("SELECT id FROM user WHERE email = ?", [ $email ]);
		if ($id === null) {
			throw new \Exception('Not found');
		}
		return self::get_by_id($id);
	}

	/**
	 * authenticate
	 *
	 * @access public
	 * @param string $email
	 * @param string $password
	 * @return User
	 */
	public static function authenticate(string $email, string $password): User {
		$user = self::get_by_email($email);
		if (
			$user->validate_password($password)
			&& (
				(bool)$user->verified === true
				|| (bool) $user->admin === true
			)
		) {
			return $user;
		}
		throw new \Exception('Authentication failed');
	}

	/**
	 * create_from_array
	 *
	 * @access public
	 * @param array $datas
	 */
	public static function create_from_array(array $datas): \User {
		$password = null;
		$user = new self();
		if (isset($datas['id'])) {
			throw new \Exception('id not allowed');
		}
		if (isset($datas['password'])) {
			$password = $datas['password'];
			unset($datas['password']);
		}
		$user->load_array($datas);
		if ($password !== null) {
			$user->set_password($password);
		}
		$user->save();
		return $user;
	}
}
