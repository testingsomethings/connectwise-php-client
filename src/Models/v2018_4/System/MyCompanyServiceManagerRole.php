<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class MyCompanyServiceManagerRole Version v2018_4
 *
 * Model for MyCompanyServiceManagerRole
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\MemberReference $reAssignToMember
 * @property integer $count
 */
class MyCompanyServiceManagerRole extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'count' => 'integer',
        'reAssignToMember' => 'Spinen\ConnectWise\Models\v2018_4\System\MemberReference',
    ];
}
