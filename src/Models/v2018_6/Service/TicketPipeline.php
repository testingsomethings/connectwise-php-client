<?php

namespace Spinen\ConnectWise\Models\v2018_6\Service;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TicketPipeline Version v2018_6
 *
 * Model for TicketPipeline
 *
 * @property Spinen\ConnectWise\Models\v2018_6\Service\BoardReference $board
 * @property Spinen\ConnectWise\Models\v2018_6\Service\Metadata $_info
 * @property Spinen\ConnectWise\Models\v2018_6\Service\ServiceStatusReference $status
 * @property Spinen\ConnectWise\Models\v2018_6\Service\TicketReference $ticket
 * @property integer $id
 */
class TicketPipeline extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => 'Spinen\ConnectWise\Models\v2018_6\Service\Metadata',
        'board' => 'Spinen\ConnectWise\Models\v2018_6\Service\BoardReference',
        'id' => 'integer',
        'status' => 'Spinen\ConnectWise\Models\v2018_6\Service\ServiceStatusReference',
        'ticket' => 'Spinen\ConnectWise\Models\v2018_6\Service\TicketReference',
    ];
}
