<?php

namespace BotGun\DaData\Objects\Bank;

use BotGun\DaData\Objects\Address\Address;
use BotGun\DaData\Objects\BaseObject;

/**
 * @property Opf $opf
 * @property Name $name
 * @property string|null $bic
 * @property string|null $swift
 * @property string|null $inn
 * @property string|null $kpp
 * @property string|null $okpo
 * @property string|null $correspondent_account
 * @property string|null $treasury_accounts
 * @property string|null $registration_number
 * @property string|null $payment_city
 * @property State $state
 * @property string|null $rkc
 * @property Address $address
 * @property string|null $phones
 */
class Cbr extends BaseObject
{
    protected array $attributes = [
        'opf'                   => 'Bank\\Opf',
        'name'                  => 'Bank\\Name',
        'bic'                   => 'string|null',
        'swift'                 => 'string|null',
        'inn'                   => 'string|null',
        'kpp'                   => 'string|null',
        'okpo'                  => 'string|null',
        'correspondent_account' => 'string|null',
        'treasury_accounts'     => 'string|null',
        'registration_number'   => 'string|null',
        'payment_city'          => 'string|null',
        'state'                 => 'Bank\\State',
        'rkc'                   => 'string|null',
        'address'               => 'Address\\Suggest',
        'phones'                => 'string|null',
    ];
}
