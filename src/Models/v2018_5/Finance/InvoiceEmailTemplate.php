<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceEmailTemplate Version v2018_5
 *
 * Model for InvoiceEmailTemplate
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\BillingStatusReference $invoiceStatus
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_5\Finance\ServiceSurveyReference $serviceSurvey
 * @property boolean $copySenderFlag
 * @property boolean $useSenderFlag
 * @property integer $id
 * @property string $body
 * @property string $emailAddress
 * @property string $firstName
 * @property string $lastName
 * @property string $name
 * @property string $subject
 */
class InvoiceEmailTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Finance\Metadata',
        'body' => 'string',
        'copySenderFlag' => 'boolean',
        'emailAddress' => 'string',
        'firstName' => 'string',
        'id' => 'integer',
        'invoiceStatus' => 'Spinen\ConnectWise\Models\v2018_5\Finance\BillingStatusReference',
        'lastName' => 'string',
        'name' => 'string',
        'serviceSurvey' => 'Spinen\ConnectWise\Models\v2018_5\Finance\ServiceSurveyReference',
        'subject' => 'string',
        'useSenderFlag' => 'boolean',
    ];
}
