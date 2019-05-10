<?php

namespace Spinen\ConnectWise\Models\v2018_5\Internal;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseReportReference Version v2018_5
 *
 * Model for ExpenseReportReference
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Internal\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ExpenseReportReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Internal\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
