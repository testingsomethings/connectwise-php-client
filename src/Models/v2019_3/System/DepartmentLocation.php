<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class DepartmentLocation Version v2019_3
 *
 * Model for DepartmentLocation
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\LdapConfigurationReference $ldapConfig
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $departmentManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $dispatch
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $dutyManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $serviceManager
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference $location
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
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'addAllLocations' => 'boolean',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemDepartmentReference',
        'departmentManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'dispatch' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'dutyManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'id' => 'integer',
        'ldapConfig' => 'Spinen\ConnectWise\Models\v2019_3\System\LdapConfigurationReference',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\System\SystemLocationReference',
        'removeAllLocations' => 'boolean',
        'serviceManager' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
    ];
}
