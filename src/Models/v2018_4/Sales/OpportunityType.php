<?php

namespace Spinen\ConnectWise\Models\v2018_4\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityType Version v2018_4
 *
 * Model for OpportunityType
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Sales\Metadata $_info
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $description
 */
class OpportunityType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Sales\Metadata',
        'description' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
    ];
}
