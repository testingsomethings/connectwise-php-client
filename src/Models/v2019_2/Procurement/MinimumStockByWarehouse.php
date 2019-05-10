<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MinimumStockByWarehouse Version v2019_2
 *
 * Model for MinimumStockByWarehouse
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference $warehouse
 * @property integer $id
 * @property integer $minimumStock
 */
class MinimumStockByWarehouse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\Metadata',
        'id' => 'integer',
        'minimumStock' => 'integer',
        'warehouse' => 'Spinen\ConnectWise\Models\v2019_2\Procurement\WarehouseReference',
    ];
}
