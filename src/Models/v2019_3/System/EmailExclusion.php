<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailExclusion Version v2019_3
 *
 * Model for EmailExclusion
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property integer $id
 * @property string $description
 */
class EmailExclusion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'description' => 'string',
        'id' => 'integer',
    ];
}
