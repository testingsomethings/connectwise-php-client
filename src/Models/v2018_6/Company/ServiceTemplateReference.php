<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ServiceTemplateReference Version v2018_6
 *
 * Model for ServiceTemplateReference
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
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
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
        'id' => 'integer',
        'name' => 'string',
        'summary' => 'string',
    ];
}
