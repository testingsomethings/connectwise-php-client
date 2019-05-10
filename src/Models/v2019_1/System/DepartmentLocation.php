<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DepartmentLocation Version v2019_1
 *
 * Model for DepartmentLocation
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\LdapConfigurationReference $ldapConfig
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $departmentManager
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $dispatch
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $dutyManager
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $serviceManager
 * @property Spinen\ConnectWise\Models\v2019_1\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference $location
 * @property boolean $addAllLocations
 * @property boolean $removeAllLocations
 * @property integer $id
 */
class DepartmentLocation extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\System\Metadata',
        'addAllLocations' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemDepartmentReference',
        'departmentManager' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'dispatch' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'dutyManager' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
        'id' => 'integer',
        'ldapConfig' => 'Spinen\ConnectWise\Models\v2019_1\System\LdapConfigurationReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_1\System\SystemLocationReference',
        'removeAllLocations' => 'boolean',
        'serviceManager' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
    ];
}
