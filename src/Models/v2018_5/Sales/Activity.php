<?php

namespace Spinen\ConnectWise\Models\v2018_5\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Activity Version v2018_5
 *
 * Model for Activity
 *
 * @property Carbon\Carbon $dateEnd
 * @property Carbon\Carbon $dateStart
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ActivityStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ActivityTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\AgreementReference $agreement
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CampaignReference $campaign
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference $assignTo
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference $assignedBy
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\OpportunityReference $opportunity
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ReminderReference $reminder
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ScheduleStatusReference $scheduleStatus
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\ServiceLocationReference $where
 * @property Spinen\ConnectWise\Models\v2018_5\Sales\TicketReference $ticket
 * @property array $customFields
 * @property boolean $notifyFlag
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property string $notes
 * @property string $phoneNumber
 */
class Activity extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Metadata',
        'agreement' => 'Spinen\ConnectWise\Models\v2018_5\Sales\AgreementReference',
        'assignTo' => 'Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference',
        'assignedBy' => 'Spinen\ConnectWise\Models\v2018_5\Sales\MemberReference',
        'campaign' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CampaignReference',
        'company' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ContactReference',
        'currency' => 'Spinen\ConnectWise\Models\v2018_5\Sales\CurrencyReference',
        'customFields' => 'array',
        'dateEnd' => 'Carbon\Carbon',
        'dateStart' => 'Carbon\Carbon',
        'email' => 'string',
        'id' => 'integer',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2018_5\Sales\Guid',
        'name' => 'string',
        'notes' => 'string',
        'notifyFlag' => 'boolean',
        'opportunity' => 'Spinen\ConnectWise\Models\v2018_5\Sales\OpportunityReference',
        'phoneNumber' => 'string',
        'reminder' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ReminderReference',
        'scheduleStatus' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ScheduleStatusReference',
        'status' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ActivityStatusReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_5\Sales\TicketReference',
        'type' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ActivityTypeReference',
        'where' => 'Spinen\ConnectWise\Models\v2018_5\Sales\ServiceLocationReference',
    ];
}
