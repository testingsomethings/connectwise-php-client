<?php

namespace Spinen\ConnectWise\Models\v2019_2\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TeamMember Version v2019_2
 *
 * Model for TeamMember
 *
 * @property Spinen\ConnectWise\Models\v2019_2\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_2\Service\MemberReference $member
 * @property Spinen\ConnectWise\Models\v2019_2\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_2\Service\ServiceTeamReference $team
 * @property boolean $teamLeaderFlag
 * @property integer $id
 */
class TeamMember extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_2\Service\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2019_2\Service\BoardReference',
        'id' => 'integer',
        'member' => 'Spinen\ConnectWise\Models\v2019_2\Service\MemberReference',
        'team' => 'Spinen\ConnectWise\Models\v2019_2\Service\ServiceTeamReference',
        'teamLeaderFlag' => 'boolean',
    ];
}
