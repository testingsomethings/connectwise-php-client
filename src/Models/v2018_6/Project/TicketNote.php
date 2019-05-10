<?php

namespace Spinen\ConnectWise\Models\v2018_6\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketNote Version v2018_6
 *
 * Model for TicketNote
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Project\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_6\Project\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_6\Project\Metadata $_info
 * @property boolean $customerUpdatedFlag
 * @property boolean $detailDescriptionFlag
 * @property boolean $externalFlag
 * @property boolean $internalAnalysisFlag
 * @property boolean $internalFlag
 * @property boolean $processNotifications
 * @property boolean $resolutionFlag
 * @property integer $id
 * @property integer $ticketId
 * @property string $text
 */
class TicketNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Project\Metadata',
        'contact' => 'Spinen\ConnectWise\Models\v2018_6\Project\ContactReference',
        'customerUpdatedFlag' => 'boolean',
        'detailDescriptionFlag' => 'boolean',
        'externalFlag' => 'boolean',
        'id' => 'integer',
        'internalAnalysisFlag' => 'boolean',
        'internalFlag' => 'boolean',
        'member' => 'Spinen\ConnectWise\Models\v2018_6\Project\MemberReference',
        'processNotifications' => 'boolean',
        'resolutionFlag' => 'boolean',
        'text' => 'string',
        'ticketId' => 'integer',
    ];
}
