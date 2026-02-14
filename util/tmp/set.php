<?php
/**
 * Initialize the application
 *
 * @author Roan Buysse <roan@tigron.be>
 */
require_once '../../lib/base/Bootstrap.php';
Bootstrap::boot();

$user = new \User();
$user->email = 'fe.buysse@outlook.be';
$user->set_password('test123');
$user->admin = true;
$user->save();