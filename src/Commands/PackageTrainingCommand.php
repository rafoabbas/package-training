<?php

namespace Codio\PackageTraining\Commands;

use Illuminate\Console\Command;

class PackageTrainingCommand extends Command
{
    public $signature = 'package-training';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
