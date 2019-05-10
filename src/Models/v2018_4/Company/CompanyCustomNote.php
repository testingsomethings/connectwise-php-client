<?php

namespace Spinen\ConnectWise\Models\v2018_4\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyCustomNote Version v2018_4
 *
 * Model for CompanyCustomNote
 *
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2018_4\Company\CompanyStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_4\Company\Metadata $_info
 * @property integer $id
 * @property string $customNote
 */
class CompanyCustomNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\Company\Metadata',
        'company' => 'Spinen\ConnectWise\Models\v2018_4\Company\CompanyReference',
        'customNote' => 'string',
        'id' => 'integer',
        'status' => 'Spinen\ConnectWise\Models\v2018_4\Company\CompanyStatusReference',
    ];
}
