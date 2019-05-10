<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Lab Version v2018_4
 *
 * Model for Lab
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property boolean $adminLock
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $identifier
 */
class Lab extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'adminLock' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'inactiveFlag' => 'boolean',
    ];
}
