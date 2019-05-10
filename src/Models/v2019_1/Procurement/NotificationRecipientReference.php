<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class NotificationRecipientReference Version v2019_1
 *
 * Model for NotificationRecipientReference
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class NotificationRecipientReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string',
    ];
}
