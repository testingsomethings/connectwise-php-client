<?php

namespace Spinen\ConnectWise\Models\v2019_3\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CurrencyReference Version v2019_3
 *
 * Model for CurrencyReference
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata $_info
 * @property integer $id
 * @property string $isoCode
 * @property string $name
 * @property string $symbol
 */
class CurrencyReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Procurement\Metadata',
        'id' => 'integer',
        'isoCode' => 'string',
        'name' => 'string',
        'symbol' => 'string',
    ];
}
