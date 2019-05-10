<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class KnowledgeBaseCategory Version v2019_3
 *
 * Model for KnowledgeBaseCategory
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\MemberReference $approver
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Service\SystemDepartmentReference $department
 * @property Spinen\ConnectWise\Models\v2019_3\Service\SystemLocationReference $location
 * @property integer $id
 * @property string $name
 */
class KnowledgeBaseCategory extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'approver' => 'Spinen\ConnectWise\Models\v2019_3\Service\MemberReference',
        'department' => 'Spinen\ConnectWise\Models\v2019_3\Service\SystemDepartmentReference',
        'id' => 'integer',
        'location' => 'Spinen\ConnectWise\Models\v2019_3\Service\SystemLocationReference',
        'name' => 'string',
    ];
}
