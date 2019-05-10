<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KPI Version v2019_1
 *
 * Model for KPI
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\KPICategoryReference $category
 * @property boolean $inactiveFlag
 * @property integer $id
 * @property integer $sortOrder
 * @property string $dateFilter
 * @property string $name
 */
class KPI extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'category' => 'Spinen\ConnectWise\Models\v2019_1\System\KPICategoryReference',
        'dateFilter' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'sortOrder' => 'integer',
    ];
}
