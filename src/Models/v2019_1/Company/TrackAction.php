<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TrackAction Version v2019_1
 *
 * Model for TrackAction
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ActivityStatusReference $activityStatus
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ActivityTypeReference $activityType
 * @property Spinen\ConnectWise\Models\v2019_1\Company\CompanyStatusReference $companyStatus
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactReference $bccContact
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ContactReference $ccContact
 * @property Spinen\ConnectWise\Models\v2019_1\Company\GroupReference $group
 * @property Spinen\ConnectWise\Models\v2019_1\Company\MemberReference $specificMemberFrom
 * @property Spinen\ConnectWise\Models\v2019_1\Company\MemberReference $specificMemberTo
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Company\NotificationRecipientReference $notifyFrom
 * @property Spinen\ConnectWise\Models\v2019_1\Company\NotificationRecipientReference $notifyWho
 * @property Spinen\ConnectWise\Models\v2019_1\Company\ServiceTemplateReference $serviceTemplate
 * @property Spinen\ConnectWise\Models\v2019_1\Company\TrackReference $attachedTrack
 * @property Spinen\ConnectWise\Models\v2019_1\Company\TrackReference $track
 * @property integer $daysToExecute
 * @property integer $id
 * @property string $emailFrom
 * @property string $emailRecipient
 * @property string $notes
 * @property string $notifyType
 * @property string $subject
 */
class TrackAction extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
        'activityStatus' => 'Spinen\ConnectWise\Models\v2019_1\Company\ActivityStatusReference',
        'activityType' => 'Spinen\ConnectWise\Models\v2019_1\Company\ActivityTypeReference',
        'attachedTrack' => 'Spinen\ConnectWise\Models\v2019_1\Company\TrackReference',
        'bccContact' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactReference',
        'ccContact' => 'Spinen\ConnectWise\Models\v2019_1\Company\ContactReference',
        'companyStatus' => 'Spinen\ConnectWise\Models\v2019_1\Company\CompanyStatusReference',
        'daysToExecute' => 'integer',
        'emailFrom' => 'string',
        'emailRecipient' => 'string',
        'group' => 'Spinen\ConnectWise\Models\v2019_1\Company\GroupReference',
        'id' => 'integer',
        'notes' => 'string',
        'notifyFrom' => 'Spinen\ConnectWise\Models\v2019_1\Company\NotificationRecipientReference',
        'notifyType' => 'string',
        'notifyWho' => 'Spinen\ConnectWise\Models\v2019_1\Company\NotificationRecipientReference',
        'serviceTemplate' => 'Spinen\ConnectWise\Models\v2019_1\Company\ServiceTemplateReference',
        'specificMemberFrom' => 'Spinen\ConnectWise\Models\v2019_1\Company\MemberReference',
        'specificMemberTo' => 'Spinen\ConnectWise\Models\v2019_1\Company\MemberReference',
        'subject' => 'string',
        'track' => 'Spinen\ConnectWise\Models\v2019_1\Company\TrackReference',
    ];
}
