<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AutoSyncTime Version v2018_6
 *
 * Model for AutoSyncTime
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\System\TimeZoneSetupReference $timeZone
 * @property integer $id
 * @property string $syncTime
 */
class AutoSyncTime extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'id' => 'integer',
        'syncTime' => 'string',
        'timeZone' => 'Spinen\ConnectWise\Models\v2018_6\System\TimeZoneSetupReference',
    ];
}
