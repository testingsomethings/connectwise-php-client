<?php

namespace Spinen\ConnectWise\Models\v2019_1\Procurement;

use Spinen\ConnectWise\Support\Model;

/**
 * Class Warehouse Version v2019_1
 *
 * Model for Warehouse
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\CurrencyReference $currency
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\MemberReference $manager
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\SiteReference $site
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\Procurement\SystemLocationReference $location
 * @property boolean $inactiveFlag
 * @property boolean $locationDefaultFlag
 * @property boolean $overallDefaultFlag
 * @property integer $id
 * @property string $locationXref
 * @property string $name
 */
class Warehouse extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\Metadata',
        'company' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CompanyReference',
        'currency' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\CurrencyReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\SystemDepartmentReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\SystemLocationReference',
        'locationDefaultFlag' => 'boolean',
        'locationXref' => 'string',
        'manager' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\MemberReference',
        'name' => 'string',
        'overallDefaultFlag' => 'boolean',
        'site' => 'Spinen\ConnectWise\Models\v2019_1\Procurement\SiteReference',
    ];
}
