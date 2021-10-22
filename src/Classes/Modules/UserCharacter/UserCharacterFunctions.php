<?php


namespace App\Modules\UserCharacter;


use App\Models\User;

class UserCharacterFunctions extends User
{
    function writeChoose():void
    {
        echo "writeChoose Works \n";
    }

    function checkChoose():void
    {
        echo "checkChoose Works \n";
    }

    function runChange():void
    {
        echo "runChange Works \n";
    }
}