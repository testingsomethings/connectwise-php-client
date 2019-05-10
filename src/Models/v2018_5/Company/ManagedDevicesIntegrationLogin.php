<?php

namespace Spinen\ConnectWise\Models\v2018_5\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ManagedDevicesIntegrationLogin Version v2018_5
 *
 * Model for ManagedDevicesIntegrationLogin
 *
 * @property Spinen\ConnectWise\Models\v2018_5\Company\ManagedDevicesIntegrationReference $managedDevicesIntegration
 * @property Spinen\ConnectWise\Models\v2018_5\Company\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2018_5\Company\Metadata $_info
 * @property integer $id
 * @property string $password
 * @property string $username
 */
class ManagedDevicesIntegrationLogin extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_5\Company\Metadata',
        'id' => 'integer',
        'managedDevicesIntegration' => 'Spinen\ConnectWise\Models\v2018_5\Company\ManagedDevicesIntegrationReference',
        'member' => 'Spinen\ConnectWise\Models\v2018_5\Company\MemberReference',
        'password' => 'string',
        'username' => 'string',
    ];
}
