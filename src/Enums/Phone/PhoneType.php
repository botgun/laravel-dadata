<?php

namespace BotGun\DaData\Enums\Phone;

use BotGun\DaData\Enums\Enum;

enum PhoneType: string
{
    use Enum;

    case Mobile         = 'Мобильный';
    case Stationary     = 'Стационарный';
    case DirectMobile   = 'Прямой мобильный';
    case CallCenter     = 'Колл-центр';
    case Unknown        = 'Неизвестный';
}
