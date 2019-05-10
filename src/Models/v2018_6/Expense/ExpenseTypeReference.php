<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ExpenseTypeReference Version v2018_6
 *
 * Model for ExpenseTypeReference
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ExpenseTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Expense\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
