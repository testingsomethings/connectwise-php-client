<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowNotifyType Version v2018_5
 *
 * Model for WorkflowNotifyType
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property boolean $externalFlag
 * @property boolean $isSetupFlag
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class WorkflowNotifyType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'externalFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'isSetupFlag' => 'boolean',
        'name' => 'string',
    ];
}
