<?php
/**
 * Application_Method class
 *
 * @author Roan Buysse <roan@tigron.be>
 */

use \Skeleton\Database\Database;

class Application_Method {
	use \Skeleton\Object\Model;
	use \Skeleton\Object\Get;
	use \Skeleton\Object\Save;

	/**
	 * Text fields
	 *
	 * @access private
	 * @var array $text_fields
	 */
	private static $object_text_fields = [ 'name' ];

}
