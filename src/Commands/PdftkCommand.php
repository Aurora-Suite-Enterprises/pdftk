<?php

namespace AuroraSuite\Pdftk\Commands;

use Illuminate\Console\Command;

class PdftkCommand extends Command
{
    public $signature = 'pdftk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
