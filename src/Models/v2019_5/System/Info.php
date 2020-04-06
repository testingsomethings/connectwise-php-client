<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class Info Version v2019_5
 *
 * Model for Info
 *
 * @property array $licenseBits
 * @property boolean $isCloud
 * @property string $cloudRegion
 * @property string $serverTimeZone
 * @property string $version
 */
class Info extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'cloudRegion' => 'string',
        'isCloud' => 'boolean',
        'licenseBits' => 'array',
        'serverTimeZone' => 'string',
        'version' => 'string'
    ];
}
