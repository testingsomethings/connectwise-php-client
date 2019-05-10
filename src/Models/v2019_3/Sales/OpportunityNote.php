<?php

namespace Spinen\ConnectWise\Models\v2019_3\Sales;

use Spinen\ConnectWise\Support\Model;

/**
 * Class OpportunityNote Version v2019_3
 *
 * Model for OpportunityNote
 *
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Guid $mobileGuid
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2019_3\Sales\NoteTypeReference $type
 * @property boolean $flagged
 * @property integer $id
 * @property integer $opportunityId
 * @property string $enteredBy
 * @property string $text
 */
class OpportunityNote extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Metadata',
        'enteredBy' => 'string',
        'flagged' => 'boolean',
        'id' => 'integer',
        'mobileGuid' => 'Spinen\ConnectWise\Models\v2019_3\Sales\Guid',
        'opportunityId' => 'integer',
        'text' => 'string',
        'type' => 'Spinen\ConnectWise\Models\v2019_3\Sales\NoteTypeReference',
    ];
}
