<?php

namespace Phpteam\FoundationService\Listeners;

use Phpteam\FoundationService\Events\PositionCNUpdatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Phpteam\FoundationService\Converter\PublicConverter;
use Phpteam\FoundationService\Services\StaffCNService;

class PositionCNUpdatedEventListener
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
     * @param  PositionCNUpdatedEvent  $event
     * @return void
     */
    public function handle(PositionCNUpdatedEvent $event)
    {
        $positionData = $event->data['message'];

        $positionData = PublicConverter::transform('positions_cn', $positionData);

        $positionCNModel = new $this->positionCNPath();

        $positionCNModel = $positionCNModel->findOrFail($positionData['id']);

        $positionCNModel->fill($positionData);

        $positionCNModel->save();

        StaffCNService::staffCNUpdateInfo();
    }
}
