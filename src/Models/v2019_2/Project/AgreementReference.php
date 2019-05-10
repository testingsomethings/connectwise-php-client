<?php

namespace Spinen\ConnectWise\Models\v2019_2\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementReference Version v2019_2
 *
 * Model for AgreementReference
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Project\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class AgreementReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Project\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
