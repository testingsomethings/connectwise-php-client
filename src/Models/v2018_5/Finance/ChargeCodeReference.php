<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ChargeCodeReference Version v2018_5
 *
 * Model for ChargeCodeReference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ChargeCodeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
