<?php

require "vendor/autoload.php";

//require_once "src\Classes\RoutingClasses.php";

use App\Models\User;
use App\Modules\MainMenu\MainMenuCLI;

$value = new User();
$value = new MainMenuCLI();

$value->MainMenuCLIRun();