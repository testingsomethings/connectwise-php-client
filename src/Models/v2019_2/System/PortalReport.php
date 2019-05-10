<?php

namespace Spinen\ConnectWise\Models\v2019_2\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalReport Version v2019_2
 *
 * Model for PortalReport
 *
 * @property Spinen\ConnectWise\Models\v2019_2\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\System\PortalConfigurationReference $portalConfiguration
 * @property boolean $customFlag
 * @property boolean $displayFlag
 * @property boolean $openSameWindowFlag
 * @property integer $id
 * @property string $name
 * @property string $url
 */
class PortalReport extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\System\Metadata',
        'customFlag' => 'boolean',
        'displayFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
        'openSameWindowFlag' => 'boolean',
        'portalConfiguration' => 'Spinen\ConnectWise\Models\v2019_2\System\PortalConfigurationReference',
        'url' => 'string',
    ];
}
