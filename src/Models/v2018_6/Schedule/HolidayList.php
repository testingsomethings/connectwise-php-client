<?php

namespace Spinen\ConnectWise\Models\v2018_6\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class HolidayList Version v2018_6
 *
 * Model for HolidayList
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class HolidayList extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Schedule\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
