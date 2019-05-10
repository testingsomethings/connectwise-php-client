<?php

namespace Spinen\ConnectWise\Models\v2019_2\Expense;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ClassificationReference Version v2019_2
 *
 * Model for ClassificationReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Expense\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class ClassificationReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Expense\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
