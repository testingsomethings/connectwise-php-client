<?php

namespace Spinen\ConnectWise\Models\v2018_4\Time;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceReference Version v2018_4
 *
 * Model for InvoiceReference
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Time\Metadata $_info
 * @property integer $id
 * @property string $identifier
 */
class InvoiceReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Time\Metadata',
        'id' => 'integer',
        'identifier' => 'string',
    ];
}
