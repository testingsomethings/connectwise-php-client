<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeWorkTypeExclusion Version v2018_6
 *
 * Model for AgreementTypeWorkTypeExclusion
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\AgreementTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\WorkTypeReference $workType
 * @property integer $id
 */
class AgreementTypeWorkTypeExclusion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Finance\AgreementTypeReference',
        'workType' => 'Spinen\ConnectWise\Models\v2018_6\Finance\WorkTypeReference',
    ];
}
