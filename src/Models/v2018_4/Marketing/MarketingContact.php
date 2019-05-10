<?php

namespace Spinen\ConnectWise\Models\v2018_4\Marketing;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MarketingContact Version v2018_4
 *
 * Model for MarketingContact
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Marketing\Metadata $_info
 * @property boolean $unsubscribeFlag
 * @property integer $groupId
 * @property integer $id
 * @property string $note
 */
class MarketingContact extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Marketing\Metadata',
        'groupId' => 'integer',
        'id' => 'integer',
        'note' => 'string',
        'unsubscribeFlag' => 'boolean',
    ];
}
