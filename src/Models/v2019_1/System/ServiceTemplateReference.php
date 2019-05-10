<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplateReference Version v2019_1
 *
 * Required when notifyType is set to: "Create a Service Ticket"
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property integer $id
 * @property string $name
 * @property string $summary
 */
class ServiceTemplateReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'id' => 'integer',
        'name' => 'string',
        'summary' => 'string',
    ];
}
