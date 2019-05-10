<?php

namespace Spinen\ConnectWise\Models\v2018_4\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProductComponent Version v2018_4
 *
 * Model for ProductComponent
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\CatalogItemReference $catalogItem
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\CompanyReference $vendor
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ProductItemReference $parentProductItem
 * @property Spinen\ConnectWise\Models\v2018_4\Procurement\ProductItemReference $productItem
 * @property boolean $hideDescriptionFlag
 * @property boolean $hideItemIdentifierFlag
 * @property boolean $hidePriceFlag
 * @property boolean $hideQuantityFlag
 * @property float $cost
 * @property float $price
 * @property float $quantity
 * @property integer $id
 * @property integer $sequenceNumber
 */
class ProductComponent extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\Metadata',
        'catalogItem' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\CatalogItemReference',
        'cost' => 'float',
        'hideDescriptionFlag' => 'boolean',
        'hideItemIdentifierFlag' => 'boolean',
        'hidePriceFlag' => 'boolean',
        'hideQuantityFlag' => 'boolean',
        'id' => 'integer',
        'parentProductItem' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ProductItemReference',
        'price' => 'float',
        'productItem' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\ProductItemReference',
        'quantity' => 'float',
        'sequenceNumber' => 'integer',
        'vendor' => 'Spinen\ConnectWise\Models\v2018_4\Procurement\CompanyReference',
    ];
}
