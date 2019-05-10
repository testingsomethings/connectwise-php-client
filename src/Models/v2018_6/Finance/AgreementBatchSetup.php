<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementBatchSetup Version v2018_6
 *
 * Model for AgreementBatchSetup
 *
 * @property Carbon\Carbon $nextRunDate
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property integer $daysInAdvance
 * @property integer $id
 */
class AgreementBatchSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'daysInAdvance' => 'integer',
        'id' => 'integer',
        'nextRunDate' => 'Carbon\Carbon',
    ];
}
