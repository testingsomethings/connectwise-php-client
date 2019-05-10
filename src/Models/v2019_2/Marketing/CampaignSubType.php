<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CampaignSubType Version v2019_2
 *
 * Model for CampaignSubType
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\CampaignTypeReference $type
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class CampaignSubType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata',
        'id' => 'integer',
        'name' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\CampaignTypeReference',
    ];
}
