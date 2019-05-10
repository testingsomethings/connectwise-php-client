<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardStatusNotification Version v2018_6
 *
 * Model for BoardStatusNotification
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Service\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Service\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2018_6\Service\ServiceStatusReference $status
 * @property integer $id
 * @property integer $workflowStep
 * @property string $email
 */
class BoardStatusNotification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
        'email' => 'string',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Service\MemberReference',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2018_6\Service\NotificationRecipientReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Service\ServiceStatusReference',
        'workflowStep' => 'integer',
    ];
}
