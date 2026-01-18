<?php
/**
 * Initialize the application
 *
 * @author Roan Buysse <roan@tigron.be>
 */
require_once 'lib/base/Bootstrap.php';
Bootstrap::boot();

\Skeleton\Core\Http\Handler::Run();
