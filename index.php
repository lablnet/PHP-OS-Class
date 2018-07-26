<?php

require_once 'classes/OperatingSystem.php';

$os = new OperatingSystem();
echo $os->get();
