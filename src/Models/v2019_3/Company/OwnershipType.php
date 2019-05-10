<?php

namespace Spinen\ConnectWise\Models\v2019_3\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OwnershipType Version v2019_3
 *
 * Model for OwnershipType
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Company\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class OwnershipType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Company\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
