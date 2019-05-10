<?php

namespace Spinen\ConnectWise\Models\v2018_6\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class InvoiceTemplateSetup Version v2018_6
 *
 * Model for InvoiceTemplateSetup
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Finance\Metadata $_info
 * @property boolean $customFlag
 * @property integer $id
 * @property string $name
 */
class InvoiceTemplateSetup extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Finance\Metadata',
        'customFlag' => 'boolean',
        'id' => 'integer',
        'name' => 'string',
    ];
}
