<?php

namespace Phpteam\FoundationService\Listeners;

use Phpteam\FoundationService\Events\PositionCNAddedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Phpteam\FoundationService\Converter\PublicConverter;

class PositionCNAddedEventListener
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
     * @param  PositionCNAddedEvent  $event
     * @return void
     */
    public function handle(PositionCNAddedEvent $event)
    {
        $positionData = $event->data['message'];

        $positionCNModel = new $this->positionCNPath(PublicConverter::transform('positions_cn', $positionData));

        $positionCNModel->save();
    }
}
