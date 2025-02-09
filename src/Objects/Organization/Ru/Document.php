<?php

namespace BotGun\DaData\Objects\Organization\Ru;

use BotGun\DaData\Objects\BaseObject;
use BotGun\DaData\Objects\Document\Fts;
use BotGun\DaData\Objects\Document\Pf;
use BotGun\DaData\Objects\Document\Sif;
use BotGun\DaData\Objects\Document\Smb;

/**
 * @property Fts $fts_registration
 * @property Fts $fts_report
 * @property Pf  $pf_registration
 * @property Sif $sif_registration
 * @property Smb $smb
 */
class Document extends BaseObject
{
    protected array $attributes = [
        'fts_registration'  => 'Document\\Fts',
        'fts_report'        => 'Document\\Fts',
        'pf_registration'   => 'Document\\Pf',
        'sif_registration'  => 'Document\\Sif',
        'smb'               => 'Document\\Smb',
    ];
}
