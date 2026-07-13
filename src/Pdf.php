<?php

declare(strict_types=1);

namespace AuroraSuite\Pdftk;

use LogicException;
use Override;

class Pdf extends \mikehaertl\pdftk\Pdf
{
    #[Override]
    public function getCommand(): \mikehaertl\pdftk\Command
    {
        if ($this->_command === null) {
            $this->_command = new Command(
                $this->getBinaryPath(
                    match (config('pdftk.architecture')) {
                        'aarch64' => 'pdftk-arm64',
                        'x86_64' => 'pdftk-x86_64',
                        default => throw new LogicException('Unsupported architecture: '.config('pdftk.architecture')),
                    }
                )
            );
        }

        return $this->_command;
    }

    public function getBinaryPath(string $binary): string
    {
        return __DIR__.DIRECTORY_SEPARATOR.'bin'.DIRECTORY_SEPARATOR.$binary;
    }
}
