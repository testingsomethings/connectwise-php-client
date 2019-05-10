<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityRatingReference Version v2018_5
 *
 * Model for OpportunityRatingReference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class OpportunityRatingReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
