<?php
/*
echo "<h3>Get request variables</h3>";
echo "<pre>";
print_r($_GET);
echo "</pre>";
*/
require "framework/core/Framework.class.php";
Framework::run();

include CORE_PATH . "Routes.php";

Framework::dispatch();

