<?php

namespace Spinen\ConnectWise\Models\v2019_1\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationDutyManager Version v2019_1
 *
 * Model for MemberDeactivationDutyManager
 *
 * @property Spinen\ConnectWise\Models\v2019_1\System\MemberReference $reAssignToMember
 * @property integer $count
 */
class MemberDeactivationDutyManager extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_1\System\MemberReference',
    ];
}
