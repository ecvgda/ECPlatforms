<?php


namespace App\Modules\MainMenu;


use App\Models\MainMenu;
use App\Modules\SimpleCalculator\SimpleCalculatorCLI;

class MainMenuCLIFunctions extends MainMenu
{
    function writeChoose():void
    {
        echo "Dear Guest, Welcome to Platform, Please Choose Modules \n";

        $command_read_line = readline("Please choose module: ");
        $this->setChoosedModuleForRun($command_read_line);
    }

    function checkChoose(): ?string
    {
        $check_value = $this->getChoosedModuleForRun();
        $check_on_method_exist = "startFromMainMenu".$check_value;

        if ( $check_value == "exit") {
            exit();
        }

        if(method_exists($this, $check_on_method_exist)){
            return $check_value;
        }

        return null;
    }

    function runChoose():void
    {
        $name_run_modules = "startFromMainMenu".$this->getChoosedModuleForRun();
        $this->$name_run_modules();
    }
}