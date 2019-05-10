<?php

namespace Spinen\ConnectWise\Models\v2019_1\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementWorkTypeExclusion Version v2019_1
 *
 * Model for AgreementWorkTypeExclusion
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Finance\WorkTypeReference $workType
 * @property integer $agreementId
 * @property integer $id
 */
class AgreementWorkTypeExclusion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Finance\Metadata',
        'agreementId' => 'integer',
        'id' => 'integer',
        'workType' => 'Spinen\ConnectWise\Models\v2019_1\Finance\WorkTypeReference',
    ];
}
