<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Document\Fts;
use BotGun\DaData\Objects\Document\Pf;
use BotGun\DaData\Objects\Document\Sif;

/**
 * @property string $authorities
 * @property Fts    $fts_registration
 * @property Fts    $fts_report
 * @property Pf     $pf
 * @property Sif    $sif
 */
class Authorities extends BaseObject
{
    protected array $attributes = [
        'authorities'       => 'string|null',
        'fts_registration'  => 'Document\\Fts',
        'fts_report'        => 'Document\\Fts',
        'pf'                => 'Document\\Pf',
        'sif'               => 'Document\\Sif',
    ];
}
