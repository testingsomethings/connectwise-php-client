<?php

namespace Spinen\ConnectWise\Models\v2018_6\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceStatusReference Version v2018_6
 *
 * Model for ServiceStatusReference
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Time\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ServiceStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Time\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
