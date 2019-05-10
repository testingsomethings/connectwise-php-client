<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardSubType Version v2019_3
 *
 * Model for BoardSubType
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 * @property array $typeAssociationIds
 * @property boolean $addAllTypesFlag
 * @property boolean $inactiveFlag
 * @property boolean $removeAllTypesFlag
 * @property integer $id
 * @property string $name
 */
class BoardSubType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'addAllTypesFlag' => 'boolean',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Service\BoardReference',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'name' => 'string',
        'removeAllTypesFlag' => 'boolean',
        'typeAssociationIds' => 'array',
    ];
}
