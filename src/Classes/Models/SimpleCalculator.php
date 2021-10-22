<?php

namespace App\Models;

use Cassandra\Date;

class SimpleCalculator
{
    private $int_first_value;
    private $int_second_value;
    private $sign_for_calculate_values;
    private $command_read_line;
    protected $read_line_command;


    /**
     * @return mixed
     */
    public function getIntFirstValue()
    {
        return $this->int_first_value;
    }

    /**
     * @param mixed $int_first_value
     */
    public function setIntFirstValue($int_first_value): void
    {
        $this->int_first_value = $int_first_value;
    }

    /**
     * @return mixed
     */
    public function getIntSecondValue()
    {
        return $this->int_second_value;
    }

    /**
     * @param mixed $int_second_value
     */
    public function setIntSecondValue($int_second_value): void
    {
        $this->int_second_value = $int_second_value;
    }

    /**
     * @return mixed
     */
    public function getSignForCalculateValues()
    {
        return $this->sign_for_calculate_values;
    }

    /**
     * @param mixed $sign_for_calculate_values
     */
    public function setSignForCalculateValues($sign_for_calculate_values): void
    {
        $this->sign_for_calculate_values = $sign_for_calculate_values;
    }

    /**
     * @return mixed
     */
    public function getCommandReadLine()
    {
        return $this->command_read_line;
    }

    /**
     * @param mixed $command_read_line
     */
    public function setCommandReadLine($command_read_line): void
    {
        $this->command_read_line = $command_read_line;
    }


}