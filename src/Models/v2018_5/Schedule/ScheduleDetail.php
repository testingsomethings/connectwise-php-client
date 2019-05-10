<?php

namespace Spinen\ConnectWise\Models\v2018_5\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleDetail Version v2018_5
 *
 * Model for ScheduleDetail
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Spinen\ConnectWise\Models\v2018_5\Schedule\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Schedule\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Schedule\ScheduleEntryReference $scheduleEntry
 * @property integer $id
 */
class ScheduleDetail extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Schedule\Metadata',
        'dateEnd' => 'Carbon\Carbon',
        'dateStart' => 'Carbon\Carbon',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Schedule\MemberReference',
        'scheduleEntry' => 'Spinen\ConnectWise\Models\v2018_5\Schedule\ScheduleEntryReference',
    ];
}
