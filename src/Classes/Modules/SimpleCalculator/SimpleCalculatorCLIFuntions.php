<?php


namespace App\Modules\SimpleCalculator;


use App\Models\SimpleCalculator;

class SimpleCalculatorCLIFuntions extends SimpleCalculator
{
    function writeValues():void
    {
        echo "Welcome to Simple Calculator \n";

        $value_with_read_line = readline("Please choose first number: ");
        $this->setIntFirstValue($value_with_read_line);

        $value_with_read_line = readline("Please choose sign: ");
        $this->setSignForCalculateValues($value_with_read_line);

        $value_with_read_line = readline("Please choose second number: ");
        $this->setIntSecondValue($value_with_read_line);
    }

    function checkValues():?string
    {
        $simple_check_first_value = $this->getIntFirstValue();
        $simple_check_sign_value = $this->getSignForCalculateValues();
        $simple_check_second_value = $this->getIntSecondValue();

        if ($simple_check_first_value == "exit") {
            exit();
        }

        $check_result = "";
        eval("\$check_result = $simple_check_first_value $simple_check_sign_value $simple_check_second_value ;");

        if(is_numeric($check_result)){
            $this->setCommandReadLine($check_result);
            return $check_result;
        }

        return null;
    }

    function showResult():void
    {
        $result = "\nDear Guest, your result is : ".$this->getCommandReadLine()."\n";

        echo $result;
    }
}