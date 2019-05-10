<?php

namespace Spinen\ConnectWise\Models\v2019_3\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkRole Version v2019_3
 *
 * Model for AgreementWorkRole
 *
 * @property Carbon\Carbon $effectiveDate
 * @property Carbon\Carbon $endingDate
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Finance\WorkRoleReference $workRole
 * @property float $limitTo
 * @property float $rate
 * @property integer $agreementId
 * @property integer $id
 * @property integer $locationId
 * @property string $rateType
 */
class AgreementWorkRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Finance\Metadata',
        'agreementId' => 'integer',
        'effectiveDate' => 'Carbon\Carbon',
        'endingDate' => 'Carbon\Carbon',
        'id' => 'integer',
        'limitTo' => 'float',
        'locationId' => 'integer',
        'rate' => 'float',
        'rateType' => 'string',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_3\Finance\WorkRoleReference',
    ];
}
