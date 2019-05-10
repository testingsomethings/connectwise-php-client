<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CentralServiceEula Version v2018_5
 *
 * Model for CentralServiceEula
 *
 * @property Carbon\Carbon $signedDate
 * @property Spinen\ConnectWise\Models\v2018_5\System\MemberReference $signedMember
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property boolean $acceptedFlag
 * @property integer $id
 * @property string $eulaKey
 * @property string $eulaServiceLink
 * @property string $eulaUiLink
 */
class CentralServiceEula extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'acceptedFlag' => 'boolean',
        'eulaKey' => 'string',
        'eulaServiceLink' => 'string',
        'eulaUiLink' => 'string',
        'id' => 'integer',
        'signedDate' => 'Carbon\Carbon',
        'signedMember' => 'Spinen\ConnectWise\Models\v2018_5\System\MemberReference',
    ];
}
