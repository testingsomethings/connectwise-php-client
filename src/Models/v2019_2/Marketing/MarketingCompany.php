<?php

namespace Spinen\ConnectWise\Models\v2019_2\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketingCompany Version v2019_2
 *
 * Model for MarketingCompany
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata $_info
 * @property boolean $allContactsFlag
 * @property boolean $defaultContactFlag
 * @property boolean $unsubscribeFlag
 * @property integer $groupId
 * @property integer $id
 */
class MarketingCompany extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Marketing\Metadata',
        'allContactsFlag' => 'boolean',
        'defaultContactFlag' => 'boolean',
        'groupId' => 'integer',
        'id' => 'integer',
        'unsubscribeFlag' => 'boolean',
    ];
}
