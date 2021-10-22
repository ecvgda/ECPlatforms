<?php


namespace App\Modules\MainMenu;


class MainMenuCLI extends MainMenuCLIFunctions
{
    function MainMenuCLIRun():void
    {
        while (true):
            $this->writeChoose();

            $cmd = $this->checkChoose();

            if ($cmd){
                $this->runChoose();
            }
        endwhile;
    }
}
