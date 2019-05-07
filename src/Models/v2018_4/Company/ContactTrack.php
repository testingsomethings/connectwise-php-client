<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ContactTrack
 *
 * @property integer $id
 * @property string $name
 * @property boolean $inactiveFlag
 * @property array $notifyActionIds
 */
class ContactTrack extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'notifyActionIds' => 'array',
    ];
}
