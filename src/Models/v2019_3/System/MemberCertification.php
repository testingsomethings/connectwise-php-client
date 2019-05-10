<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberCertification Version v2019_3
 *
 * Model for MemberCertification
 *
 * @property Carbon\Carbon $dateExpires
 * @property Carbon\Carbon $dateReceived
 * @property Spinen\ConnectWise\Models\v2019_3\System\CertificationReference $certification
 * @property Spinen\ConnectWise\Models\v2019_3\System\CompanyReference $company
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\System\Metadata $_info
 * @property integer $id
 * @property integer $percentComplete
 * @property string $certificationNumber
 * @property string $notes
 */
class MemberCertification extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\System\Metadata',
        'certification' => 'Spinen\ConnectWise\Models\v2019_3\System\CertificationReference',
        'certificationNumber' => 'string',
        'company' => 'Spinen\ConnectWise\Models\v2019_3\System\CompanyReference',
        'dateExpires' => 'Carbon\Carbon',
        'dateReceived' => 'Carbon\Carbon',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
        'notes' => 'string',
        'percentComplete' => 'integer',
    ];
}
