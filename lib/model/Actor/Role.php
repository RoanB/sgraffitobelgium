<?php
/**
 * Role class => Belang
 *
 * @author Roan Buysse <roan@tigron.be>
 */

use \Skeleton\Database\Database;

class Actor_Role {
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
