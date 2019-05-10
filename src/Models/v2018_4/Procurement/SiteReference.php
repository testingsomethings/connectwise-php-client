<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SiteReference Version v2018_4
 *
 * Model for SiteReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class SiteReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
