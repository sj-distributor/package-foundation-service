<?php

namespace Phpteam\FoundationService\Listeners;

use Phpteam\FoundationService\Events\PositionCNDeletedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Phpteam\FoundationService\Converter\PublicConverter;

class PositionCNDeletedEventListener
{
    protected $positionCNPath;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->positionCNPath = config('foundation.models_namespace').'\PositionCN';
    }

    /**
     * Handle the event.
     *
     * @param  PositionCNDeletedEvent  $event
     * @return void
     */
    public function handle(PositionCNDeletedEvent $event)
    {
        $positionData = $event->data['message'];

        $positionData = PublicConverter::transform('positions_cn', $positionData);

        $positionCNModel = new $this->positionCNPath();

        $positionCNModel::where('id', '=', $positionData['id'])->delete();
    }
}
