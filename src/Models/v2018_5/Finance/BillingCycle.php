<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BillingCycle Version v2018_5
 *
 * Model for BillingCycle
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $billingOptions
 * @property string $identifier
 * @property string $name
 */
class BillingCycle extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'billingOptions' => 'string',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
