<?php

namespace IbrahimBougaoua\FilamentReferralSystem\Commands;

use Illuminate\Console\Command;

class FilamentReferralSystemCommand extends Command
{
    public $signature = 'filament-referral-system';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
