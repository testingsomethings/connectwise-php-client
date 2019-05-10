<?php

namespace Spinen\ConnectWise\Models\v2019_3\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MemberDeactivationServiceManger Version v2019_3
 *
 * Model for MemberDeactivationServiceManger
 *
 * @property Spinen\ConnectWise\Models\v2019_3\System\MemberReference $reAssignToMember
 * @property integer $count
 */
class MemberDeactivationServiceManger extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2019_3\System\MemberReference',
    ];
}
