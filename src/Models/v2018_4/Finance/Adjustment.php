<?php

namespace Spinen\ConnectWise\Models\v2018_4\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Adjustment Version v2018_4
 *
 * Model for Adjustment
 *
 * @property Carbon\Carbon $effectiveDate
 * @property Spinen\ConnectWise\Models\v2018_4\Finance\Metadata $_info
 * @property array $customFields
 * @property float $amount
 * @property integer $agreementId
 * @property integer $id
 * @property string $description
 */
class Adjustment extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Finance\Metadata',
        'agreementId' => 'integer',
        'amount' => 'float',
        'customFields' => 'array',
        'description' => 'string',
        'effectiveDate' => 'Carbon\Carbon',
        'id' => 'integer',
    ];
}
