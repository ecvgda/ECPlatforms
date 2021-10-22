<?php


namespace App\Models;


use App\Modules\CustomCalculator\CustomCalculatorCLI;
use App\Modules\SimpleCalculator\SimpleCalculatorCLI;
use App\Modules\UserCharacter\UserCharacter;

class MainMenu
{
    private $choosed_module_for_run;
    protected $start_welcome_texts = "saffsa";

    /**
     * @return mixed
     */
    public function getChoosedModuleForRun()
    {
        return $this->choosed_module_for_run;
    }

    /**
     * @param mixed $choosed_module_for_run
     */
    public function setChoosedModuleForRun($choosed_module_for_run): void
    {
        $this->choosed_module_for_run = $choosed_module_for_run;
    }

    function startFromMainMenuSimpleCalculator ():void
    {
        $class_simple_calculator = new SimpleCalculatorCLI();
        $class_simple_calculator->SimpleCalculatorCLIRun();
    }

    function startFromMainMenuCustomCalculator ():void
    {
        $class_custom_calculator = new CustomCalculatorCLI();
        $class_custom_calculator->CustomCalculatorCLIRun();
    }

    function startFromMainMenuUserCharacter ():void
    {
        $class_user_character = new UserCharacter();
        $class_user_character->UserCharacterRun();
    }
}