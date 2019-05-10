<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ParsingType Version v2018_5
 *
 * Model for ParsingType
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $name
 * @property string $parseRule
 */
class ParsingType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'parseRule' => 'string',
    ];
}
