<?php

namespace Spinen\ConnectWise\Models\v2019_3\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCodeExpenseType Version v2019_3
 *
 * Model for ChargeCodeExpenseType
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Time\ChargeCodeReference $chargeCode
 * @property Spinen\ConnectWise\Models\v2019_3\Time\ExpenseTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_3\Time\Metadata $_info
 * @property integer $id
 */
class ChargeCodeExpenseType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Time\Metadata',
        'chargeCode' => 'Spinen\ConnectWise\Models\v2019_3\Time\ChargeCodeReference',
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Time\ExpenseTypeReference',
    ];
}
