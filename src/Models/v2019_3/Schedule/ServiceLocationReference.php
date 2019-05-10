<?php

namespace Spinen\ConnectWise\Models\v2019_3\Schedule;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceLocationReference Version v2019_3
 *
 * Model for ServiceLocationReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ServiceLocationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Schedule\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
