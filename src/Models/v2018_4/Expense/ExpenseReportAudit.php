<?php

namespace Spinen\ConnectWise\Models\v2018_4\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReportAudit Version v2018_4
 *
 * Model for ExpenseReportAudit
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Expense\AuditSource $source
 * @property Spinen\ConnectWise\Models\v2018_4\Expense\AuditType $type
 * @property Spinen\ConnectWise\Models\v2018_4\Expense\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_4\Expense\Metadata $_info
 * @property integer $id
 * @property string $message
 * @property string $newValue
 * @property string $oldValue
 * @property string $value
 */
class ExpenseReportAudit extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Expense\Metadata',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2018_4\Expense\MemberReference',
        'message' => 'string',
        'newValue' => 'string',
        'oldValue' => 'string',
        'source' => 'Spinen\ConnectWise\Models\v2018_4\Expense\AuditSource',
        'type' => 'Spinen\ConnectWise\Models\v2018_4\Expense\AuditType',
        'value' => 'string',
    ];
}
