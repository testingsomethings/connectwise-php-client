<?php

namespace Spinen\ConnectWise\Models\v2018_5\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectType Version v2018_5
 *
 * Model for ProjectType
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Project\Metadata $_info
 * @property boolean $defaultFlag
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $integrationXref
 * @property string $name
 */
class ProjectType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Project\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'integrationXref' => 'string',
        'name' => 'string',
    ];
}
