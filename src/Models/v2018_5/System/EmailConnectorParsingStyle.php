<?php

namespace Spinen\ConnectWise\Models\v2018_5\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class EmailConnectorParsingStyle Version v2018_5
 *
 * Model for EmailConnectorParsingStyle
 *
 * @property Spinen\ConnectWise\Models\v2018_5\System\EmailConnectorParsingTypeReference $parsingType
 * @property Spinen\ConnectWise\Models\v2018_5\System\Metadata $_info
 * @property integer $id
 * @property integer $priority
 * @property string $parseRule
 */
class EmailConnectorParsingStyle extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\System\Metadata',
        'id' => 'integer',
        'parseRule' => 'string',
        'parsingType' => 'Spinen\ConnectWise\Models\v2018_5\System\EmailConnectorParsingTypeReference',
        'priority' => 'integer',
    ];
}
