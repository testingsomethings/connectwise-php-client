<?php

namespace Spinen\ConnectWise\Models\v2018_4\System;

use Spinen\ConnectWise\Support\Model;

/**
 * Class SurveyQuestion Version v2018_4
 *
 * Model for SurveyQuestion
 *
 * @property Spinen\ConnectWise\Models\v2018_4\System\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_4\System\SurveyReference $survey
 * @property boolean $inactiveFlag
 * @property boolean $requiredFlag
 * @property float $sequenceNumber
 * @property integer $id
 * @property integer $numberOfDecimals
 * @property string $entryType
 * @property string $fieldType
 * @property string $question
 */
class SurveyQuestion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_4\System\Metadata',
        'entryType' => 'string',
        'fieldType' => 'string',
        'id' => 'integer',
        'inactiveFlag' => 'boolean',
        'numberOfDecimals' => 'integer',
        'question' => 'string',
        'requiredFlag' => 'boolean',
        'sequenceNumber' => 'float',
        'survey' => 'Spinen\ConnectWise\Models\v2018_4\System\SurveyReference',
    ];
}
