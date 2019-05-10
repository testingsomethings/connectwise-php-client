<?php

namespace Spinen\ConnectWise\Models\v2019_2\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityStatusReference Version v2019_2
 *
 * Model for OpportunityStatusReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Sales\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class OpportunityStatusReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Sales\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
