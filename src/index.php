<?php
//echo "<p>index.php called</p>";

//echo "<p>";
//echo "<p>index.php called</p>";
require "framework/core/Framework.class.php";
Framework::run();

include CORE_PATH . "Routes.php";

Framework::dispatch();

