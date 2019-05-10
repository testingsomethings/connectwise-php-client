<?php

namespace Spinen\ConnectWise\Models\v2019_1\Company;

use Spinen\ConnectWise\Support\Model;

/**
 * Class PortalSecuritySetting Version v2019_1
 *
 * Model for PortalSecuritySetting
 *
 * @property Spinen\ConnectWise\Models\v2019_1\Company\Metadata $_info
 * @property boolean $levelFive
 * @property boolean $levelFour
 * @property boolean $levelOne
 * @property boolean $levelSix
 * @property boolean $levelThree
 * @property boolean $levelTwo
 * @property integer $id
 * @property string $functionDescription
 * @property string $functionIdentifier
 */
class PortalSecuritySetting extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_1\Company\Metadata',
        'functionDescription' => 'string',
        'functionIdentifier' => 'string',
        'id' => 'integer',
        'levelFive' => 'boolean',
        'levelFour' => 'boolean',
        'levelOne' => 'boolean',
        'levelSix' => 'boolean',
        'levelThree' => 'boolean',
        'levelTwo' => 'boolean',
    ];
}
