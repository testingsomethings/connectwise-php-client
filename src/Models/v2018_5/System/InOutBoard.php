<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InOutBoard Version v2018_5
 *
 * Model for InOutBoard
 *
 * @property Carbon\Carbon $dateBack
 * @property Spinen\ConnectWise\Models\v2018_5\System\InOutTypeReference $inOutType
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property integer $id
 * @property string $additionalInfo
 */
class InOutBoard extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'additionalInfo' => 'string',
        'dateBack' => 'Carbon\Carbon',
        'id' => 'integer',
        'inOutType' => 'Spinen\ConnectWise\Models\v2018_5\System\InOutTypeReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
    ];
}
