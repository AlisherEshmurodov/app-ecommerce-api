<?php


namespace App\Enums;


use Illuminate\Validation\Rules\Enum;

class SettingType extends Enum
{
    const SWITCH = "switch";
    const SELECT = "select";
}
