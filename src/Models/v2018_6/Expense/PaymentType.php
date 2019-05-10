<?php

namespace Spinen\ConnectWise\Models\v2018_6\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PaymentType Version v2018_6
 *
 * Model for PaymentType
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\ClassificationReference $classification
 * @property Spinen\ConnectWise\Models\v2018_6\Expense\Metadata $_info
 * @property boolean $companyFlag
 * @property boolean $defaultFlag
 * @property integer $id
 * @property string $name
 */
class PaymentType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Expense\Metadata',
        'classification' => 'Spinen\ConnectWise\Models\v2018_6\Expense\ClassificationReference',
        'companyFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
