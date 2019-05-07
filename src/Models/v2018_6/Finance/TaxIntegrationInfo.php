<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxIntegrationInfo
 *
 * @property integer $id
 * @property boolean $enabledFlag
 * @property string $taxIntegrationType
 */
class TaxIntegrationInfo extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'enabledFlag' => 'boolean',
        'taxIntegrationType' => 'string',
    ];
}
