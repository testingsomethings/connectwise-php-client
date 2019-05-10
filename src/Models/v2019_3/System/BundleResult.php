<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BundleResult Version v2019_3
 *
 * Model for BundleResult
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\ErrorResponseMessage $Error
 * @property array $Entities
 * @property boolean $Success
 * @property integer $Count
 * @property integer $SequenceNumber
 * @property integer $StatusCode
 * @property string $ResourceType
 * @property string $Version
 */
class BundleResult extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'Count' => 'integer',
        'Entities' => 'array',
        'Error' => 'Spinen\ConnectWise\Models\v2019_3\System\ErrorResponseMessage',
        'ResourceType' => 'string',
        'SequenceNumber' => 'integer',
        'StatusCode' => 'integer',
        'Success' => 'boolean',
        'Version' => 'string',
    ];
}
