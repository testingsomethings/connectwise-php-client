<?php

namespace Spinen\ConnectWise\Models\v2018_6\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTypeAssociation Version v2018_6
 *
 * Model for CompanyTypeAssociation
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_6\Company\CompanyTypeReference $type
 * @property Spinen\ConnectWise\Models\v2018_6\Company\Metadata $_info
 * @property integer $id
 */
class CompanyTypeAssociation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Company\Metadata',
        'company' => 'Spinen\ConnectWise\Models\v2018_6\Company\CompanyReference',
        'id' => 'integer',
        'type' => 'Spinen\ConnectWise\Models\v2018_6\Company\CompanyTypeReference',
    ];
}
