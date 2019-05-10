<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceStatusReference Version v2019_2
 *
 * Model for ServiceStatusReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
