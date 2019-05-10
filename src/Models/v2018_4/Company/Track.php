<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Track Version v2018_4
 *
 * Model for Track
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property array $notifyActionIds
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property string $name
 */
class Track extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'notifyActionIds' => 'array',
    ];
}
