<?php

namespace App\Modules\SimpleCalculator;

use App\Models\SimpleCalculator;

class SimpleCalculatorCLI  extends SimpleCalculatorCLIFuntions
{
    function SimpleCalculatorCLIRun():void
    {
        while (true):
            $this->writeValues();

            $cmd = $this->checkValues();

            if ($cmd != null){
                $this->showResult();
            }
        endwhile;
    }
}