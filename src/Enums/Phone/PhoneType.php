<?php

namespace MoveMoveApp\DaData\Enums\Phone;

use MoveMoveApp\DaData\Enums\Enum;

enum PhoneType: string
{
    use Enum;

    case Mobile         = 'Мобильный';
    case Stationary     = 'Стационарный';
    case DirectMobile   = 'Прямой мобильный';
    case CallCenter     = 'Колл-центр';
    case Unknown        = 'Неизвестный';
}
