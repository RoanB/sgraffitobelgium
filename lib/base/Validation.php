<?php
/**
 * Validation Class.
 *
 * @author Gerry Demaret <gerry@tigron.be>
 * @author David Vandemaele <david@tigron.be>
 */

class Validation {

	/**
	 * Validate an email address.
	 */
	public static function email(string $email): bool {
		return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
	}

	/**
	 * Validate a phone number.
	 */
	public static function phone(string $phone, Country $country = null, bool $use_lib = false): bool {
		if ($use_lib === true) {
			try {
				$phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
				$phoneNumberObject = $phoneUtil->parse($phone, $country->get_iso2());

				if ($phoneUtil->isValidNumberForRegion($phoneNumberObject, $country->get_iso2())) {
					return true;
				} else {
					return $phoneUtil->isValidNumber($phoneNumberObject);
				}
			} catch (Exception $e) {
				return false;
			}
		} elseif (preg_match('/^\+[0-9]{1,3}\.[0-9]{5,20}$/', $phone) === 1) {
			return true;
		}

		return false;
	}

	/**
	 * Validate a phone number.
	 */
	public static function zipcode(string $zipcode, Country $country): bool {
		$validator = new \Sirprize\PostalCodeValidator\Validator();
		try {
			return $validator->isValid($country->get_iso2(), $zipcode);
		} catch (Exception $e) {
			return false;
		}
	}

	/**
	 * Validate a URL.
	 */
	public static function url(string $url): bool {
		return filter_var($url, FILTER_VALIDATE_URL) !== false;
	}

	/**
	 * Validate a date.
	 */
	public static function date(string $date): bool {
		$date_parts = explode('-', $date);

		if (count($date_parts) != 3) {
			return false;
		}

		return checkdate((int)$date_parts[1], (int)$date_parts[2], (int)$date_parts[0]);
	}

	/**
	 * Validate a datetime.
	 */
	public static function datetime(string $datetime, string $format = 'Y-m-d H:i:s'): bool {
		$obj = \DateTime::createFromFormat($format, $datetime);
		$errors = \DateTime::getLastErrors();

		if ($errors !== false and $errors['error_count'] > 0) {
			return false;
		}

		return $obj->format($format) === $datetime;
	}

	/**
	 * Validate a VAT number.
	 */
	public static function vat(string $vat_number, Country $country, &$resolver_used): bool {
		return \Skeleton\Vat\Check\Check::validate($vat_number, $country, $resolver_used);
	}

}
