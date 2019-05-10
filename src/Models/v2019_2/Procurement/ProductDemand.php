<?php

namespace Spinen\ConnectWise\Models\v2019_2\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductDemand Version v2019_2
 *
 * Model for ProductDemand
 *
 * @property float $cost
 * @property integer $productRecId
 * @property integer $quantity
 */
class ProductDemand extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'cost' => 'float',
        'productRecId' => 'integer',
        'quantity' => 'integer',
    ];
}
