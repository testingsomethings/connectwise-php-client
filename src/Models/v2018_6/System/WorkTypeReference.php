<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkTypeReference Version v2018_6
 *
 * Model for WorkTypeReference
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class WorkTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
