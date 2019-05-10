<?php

namespace Spinen\ConnectWise\Models\v2019_2\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class CompanyTeam Version v2019_2
 *
 * Model for CompanyTeam
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Company\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_2\Company\ContactReference $contact
 * @property Spinen\ConnectWise\Models\v2019_2\Company\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Company\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Company\TeamRoleReference $teamRole
 * @property boolean $accountManagerFlag
 * @property boolean $salesFlag
 * @property boolean $techFlag
 * @property integer $businessUnitId
 * @property integer $id
 * @property integer $locationId
 */
class CompanyTeam extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Company\Metadata',
        'accountManagerFlag' => 'boolean',
        'businessUnitId' => 'integer',
        'company' => 'Spinen\ConnectWise\Models\v2019_2\Company\CompanyReference',
        'contact' => 'Spinen\ConnectWise\Models\v2019_2\Company\ContactReference',
        'id' => 'integer',
        'locationId' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Company\MemberReference',
        'salesFlag' => 'boolean',
        'teamRole' => 'Spinen\ConnectWise\Models\v2019_2\Company\TeamRoleReference',
        'techFlag' => 'boolean',
    ];
}
