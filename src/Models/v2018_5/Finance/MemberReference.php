<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberReference Version v2018_5
 *
 * Vendor Can be either Member or Company Reference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class MemberReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
