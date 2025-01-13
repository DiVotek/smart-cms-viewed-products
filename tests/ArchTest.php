<?php

arch('it will not use debugging functions')
    ->expect(['dd', 'dump', 'ray'])
    ->each->not->toBeUsed();

arch('models should extend BaseModel')
    ->expect('\SmartCms\Reviews\Models')
    ->toExtend('\SmartCms\Core\Models\BaseModel');

arch('models should use HasFactory trait')
    ->expect('\SmartCms\Reviews\Models')
    ->toUseTrait('\Illuminate\Database\Eloquent\Factories\HasFactory');

arch('models should has suffix Model')
    ->expect('\SmartCms\Reviews\Models')
    ->toHaveSuffix('Model');

arch('services should has service suffix')
    ->expect('\SmartCms\Reviews\Services')
    ->toHaveSuffix('Service');

arch('commands should has Command suffix')
    ->expect('\SmartCms\Reviews\Commands')
    ->toHaveSuffix('Command');

arch('events should has Event suffix')
    ->expect('\SmartCms\Reviews\Events')
    ->toHaveSuffix('Event');

arch('events should be invokable')
    ->expect('\SmartCms\Reviews\Events')
    ->toHaveMethod('__invoke');
