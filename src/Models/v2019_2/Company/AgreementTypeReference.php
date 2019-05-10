<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class AgreementTypeReference Version v2019_2
 *
 * agreementType or configurationType is required
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 * @property integer $id
 * @property string $name
 */
class AgreementTypeReference extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
        'id' => 'integer',
        'name' => 'string',
    ];
}
