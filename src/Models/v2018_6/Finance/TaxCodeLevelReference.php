<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeLevelReference Version v2018_6
 *
 * Model for TaxCodeLevelReference
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class TaxCodeLevelReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
