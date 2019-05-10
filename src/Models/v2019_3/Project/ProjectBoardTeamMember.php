<?php

namespace Spinen\ConnectWise\Models\v2019_3\Project;

use Spinen\ConnectWise\Support\Model;

/**
 * Class ProjectBoardTeamMember Version v2019_3
 *
 * Model for ProjectBoardTeamMember
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Project\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_3\Project\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Project\ProjectRoleReference $projectRole
 * @property Spinen\ConnectWise\Models\v2019_3\Project\WorkRoleReference $workRole
 * @property integer $id
 */
class ProjectBoardTeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Project\Metadata',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_3\Project\MemberReference',
        'projectRole' => 'Spinen\ConnectWise\Models\v2019_3\Project\ProjectRoleReference',
        'workRole' => 'Spinen\ConnectWise\Models\v2019_3\Project\WorkRoleReference',
    ];
}
