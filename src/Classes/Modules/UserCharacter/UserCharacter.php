<?php

namespace App\Modules\UserCharacter;

class UserCharacter extends UserCharacterFunctions
{
    function UserCharacterRun():void
    {
        while (true):
            $this->writeChoose();

            $this->checkChoose();

            $this->runChange();

            break;
        endwhile;
    }
}