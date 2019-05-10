<?php

namespace Spinen\ConnectWise\Models\v2018_6\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SystemSetting Version v2018_6
 *
 * Model for SystemSetting
 *
 * @property Spinen\ConnectWise\Models\v2018_6\System\Metadata $_info
 * @property integer $id
 * @property string $description
 * @property string $value
 * @property string $valueType
 */
class SystemSetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\System\Metadata',
        'description' => 'string',
        'id' => 'integer',
        'value' => 'string',
        'valueType' => 'string',
    ];
}
