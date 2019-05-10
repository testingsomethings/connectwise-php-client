<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PhaseStatusReference Version v2019_3
 *
 * Model for PhaseStatusReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class PhaseStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
