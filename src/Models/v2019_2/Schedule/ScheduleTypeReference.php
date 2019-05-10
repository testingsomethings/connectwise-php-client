<?php

namespace Spinen\ConnectWise\Models\v2019_2\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ScheduleTypeReference Version v2019_2
 *
 * Model for ScheduleTypeReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Schedule\Metadata $_info
 * @property integer $id
 * @property string $identifier
 */
class ScheduleTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Schedule\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
    ];
}
