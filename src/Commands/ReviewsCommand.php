<?php

namespace SmartCms\Reviews\Commands;

use Illuminate\Console\Command;

class ReviewsCommand extends Command
{
    public $signature = 'reviews';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
