<?php
return
[
    /*队列配置*/
    'rabbitmq_queue' => env('RABBITMQ_QUEUE', ''),
    'rabbitmq_queue_error' => env('RABBITMQ_QUEUE_ERROR', ''),
    'rabbitmq_host' => env('RABBITMQ_HOST', '127.0.0.1'),
    'rabbitmq_port' => env('RABBITMQ_PORT', '5672'),
    'rabbitmq_vhost' => env('RABBITMQ_VHOST', '/'),
    'rabbitmq_login' => env('RABBITMQ_LOGIN', 'guest'),
    'rabbitmq_password' => env('RABBITMQ_PASSWORD','guest'),

    /*模型命名空间配置*/
    'models_namespace' =>'App\Models',

    /*事件监听者设置*/
    'listens' =>
    [
        // Foundation Init
        'Phpteam\FoundationService\Events\FoundationInitializationEvent' =>
        [
            'Phpteam\FoundationService\Listeners\FoundationInitializationEventListener',
        ],

        // CN Staff
        'Phpteam\FoundationService\Events\StaffCNAddedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\StaffCNAddedEventListener',
        ],
        'Phpteam\FoundationService\Events\StaffCNUpdatedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\StaffCNUpdatedEventListener',
        ],
        'Phpteam\FoundationService\Events\UserAccountCNAddedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\UserAccountCNAddedEventListener',
        ],

        // CN Position
        'Phpteam\FoundationService\Events\PositionCNAddedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\PositionCNAddedEventListener',
        ],
        'Phpteam\FoundationService\Events\PositionCNDeletedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\PositionCNDeletedEventListener',
        ],
        'Phpteam\FoundationService\Events\PositionCNUpdatedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\PositionCNUpdatedEventListener',
        ],

        // CN Unit
        'Phpteam\FoundationService\Events\UnitCNAddedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\UnitCNAddedEventListener',
        ],
        'Phpteam\FoundationService\Events\UnitCNDeletedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\UnitCNDeletedEventListener',
        ],
        'Phpteam\FoundationService\Events\UnitCNUpdatedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\UnitCNUpdatedEventListener',
        ],
        'Phpteam\FoundationService\Events\UnitCNMovedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\UnitCNMovedEventListener',
        ],

        // US Staff
        'Phpteam\FoundationService\Events\StaffUSAddedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\StaffUSAddedEventListener',
        ],

        'Phpteam\FoundationService\Events\StaffUSUpdatedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\StaffUSUpdatedEventListener',
        ],

        // US Position
        'Phpteam\FoundationService\Events\PositionUSAddedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\PositionUSAddedEventListener',
        ],
        'Phpteam\FoundationService\Events\PositionUSDeletedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\PositionUSDeletedEventListener',
        ],
        'Phpteam\FoundationService\Events\PositionUSUpdatedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\PositionUSUpdatedEventListener',
        ],

        // US Unit
        'Phpteam\FoundationService\Events\UnitUSAddedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\UnitUSAddedEventListener',
        ],
        'Phpteam\FoundationService\Events\UnitUSUpdatedEvent' =>
        [
            'Phpteam\FoundationService\Listeners\UnitUSUpdatedEventListener',
        ],
    ]
];