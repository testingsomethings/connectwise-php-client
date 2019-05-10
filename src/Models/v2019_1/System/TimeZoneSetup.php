<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TimeZoneSetup Version v2019_1
 *
 * Model for TimeZoneSetup
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\System\TimeZoneReference $timeZone
 * @property boolean $daylightSavingsFlag
 * @property boolean $defaultFlag
 * @property float $offset
 * @property integer $id
 * @property string $name
 */
class TimeZoneSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'daylightSavingsFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'offset' => 'float',
        'timeZone' => 'Spinen\ConnectWise\Models\v2019_1\System\TimeZoneReference',
    ];
}
