<?php

namespace Spinen\ConnectWise\Models\v2019_1\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyReference Version v2019_1
 *
 * Model for CompanyReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Sales\Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class CompanyReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Sales\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
