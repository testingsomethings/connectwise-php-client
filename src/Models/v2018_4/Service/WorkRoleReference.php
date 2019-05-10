<?php

namespace Spinen\ConnectWise\Models\v2018_4\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkRoleReference Version v2018_4
 *
 * Model for WorkRoleReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Service\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class WorkRoleReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Service\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
