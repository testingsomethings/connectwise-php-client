<?php

namespace Spinen\ConnectWise\Models\v2019_3\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class BoardAutoTemplate Version v2019_3
 *
 * Model for BoardAutoTemplate
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2019_3\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceItemReference $item
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceSubTypeReference $subtype
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceTemplateReference $serviceTemplate
 * @property Spinen\ConnectWise\Models\v2019_3\Service\ServiceTypeReference $type
 * @property boolean $autoApplyFlag
 * @property integer $id
 * @property string $budgetHoursSetting
 * @property string $discussionSetting
 * @property string $documentsSetting
 * @property string $financeInformationSetting
 * @property string $internalAnalysisSetting
 * @property string $resolutionSetting
 * @property string $resourcesSetting
 * @property string $sendNotesAsEmailSetting
 * @property string $summarySetting
 * @property string $tasksSetting
 */
class BoardAutoTemplate extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Service\Metadata',
        'autoApplyFlag' => 'boolean',
        'board' => 'Spinen\ConnectWise\Models\v2019_3\Service\BoardReference',
        'budgetHoursSetting' => 'string',
        'discussionSetting' => 'string',
        'documentsSetting' => 'string',
        'financeInformationSetting' => 'string',
        'id' => 'integer',
        'internalAnalysisSetting' => 'string',
        'item' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceItemReference',
        'resolutionSetting' => 'string',
        'resourcesSetting' => 'string',
        'sendNotesAsEmailSetting' => 'string',
        'serviceTemplate' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceTemplateReference',
        'subtype' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceSubTypeReference',
        'summarySetting' => 'string',
        'tasksSetting' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Service\ServiceTypeReference',
    ];
}
