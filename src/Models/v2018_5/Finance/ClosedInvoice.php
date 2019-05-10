<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ClosedInvoice Version v2018_5
 *
 * Model for ClosedInvoice
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\BillingStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property integer $id
 */
class ClosedInvoice extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'id' => 'integer',
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Finance\BillingStatusReference',
    ];
}
