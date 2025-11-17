<?php

namespace Youdu\YouduPlus\Commands;

use Illuminate\Console\Command;

class YouduPlusCommand extends Command
{
    public $signature = 'youdu-plus-core';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
