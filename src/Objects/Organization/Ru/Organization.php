<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;

/**
 * @property int|null       $kpp
 * @property Capital        $capital
 * @property string         $invalid
 * @property Management     $management
 * @property Citizenship    $citizenship
 */
class Organization extends BaseObject
{
    protected array $attributes = [
        'inn'               => 'integer|null',
        'kpp'               => 'integer|null',
        'ogrn'              => 'integer|null',
        'ogrn_date'         => 'string|null',
        'hid'               => 'string|null',
        'type'              => 'string',
        'name'              => 'Organization\\Ru\\Name',
        'fio'               => 'Organization\\Ru\\Fio',
        'okato'             => 'string|null',
        'oktmo'             => 'string|null',
        'okpo'              => 'string|null',
        'okogu'             => 'string|null',
        'okfs'              => 'string|null',
        'okved'             => 'string|null',
        'okved_type'        => 'string|null',
        'opf'               => 'Organization\\Ru\\Opf',
        'okveds'            => 'Organization\\Ru\\Okveds',
        'management'        => 'Organization\\Ru\\Management',
        'branch_count'      => 'integer|null',
        'branch_type'       => 'string|null',
        'address'           => 'Organization\\Ru\\Address',
        'state'             => 'Organization\\Ru\\State',
        'employee_count'    => 'integer|null',
        'finance'           => 'Organization\\Ru\\Finance',
        'authorities'       => 'Organization\\Ru\\Authorities',
        'citizenship'       => 'Organization\\Ru\\Citizenship',
        'founders'          => 'Organization\\Ru\\Founder[]',
        'managers'          => 'Organization\\Ru\\Manager[]',
        'predecessors'      => 'Organization\\Ru\\Predecessor[]',
        'successors'        => 'Organization\\Ru\\Successor[]',
        'capital'           => 'Organization\\Ru\\Capital',
        'invalid'           => 'boolean',
        'documents'         => 'Organization\\Ru\\Document',
        'licenses'          => 'Organization\\Ru\\License[]',
        'phones'            => 'Organization\\Ru\\OrganizationPhone[]',
        'emails'            => 'Organization\\Ru\\OrganizationEmail[]',
    ];
}
