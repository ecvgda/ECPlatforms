<?php

require "vendor/autoload.php";

//require_once "src\Classes\RoutingClasses.php";

use App\Modules\MainMenu\MainMenuCLI;

$platform = new MainMenuCLI();

$platform->MainMenuCLIRun();