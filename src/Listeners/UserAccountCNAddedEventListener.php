<?php

namespace Phpteam\FoundationService\Listeners;

use Phpteam\FoundationService\Events\UserAccountCNAddedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Phpteam\FoundationService\Converter\PublicConverter;

class UserAccountCNAddedEventListener
{
    protected $staffCNPath;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->staffCNPath = config('foundation.models_namespace').'\StaffCN';
    }

    /**
     * Handle the event.
     *
     * @param  UserAccountCNAddedEvent  $event
     * @return void
     */
    public function handle(UserAccountCNAddedEvent $event)
    {
        $staffData = $event->data['message'];

        $staffData = PublicConverter::transform('staffs_cn', $staffData);

        $staffCNModel = new $this->staffCNPath();

        $staffCNModel = $staffCNModel->findOrFail($staffData['id']);

        $staffCNModel->fill($staffData);

        $staffCNModel->save();
    }
}
