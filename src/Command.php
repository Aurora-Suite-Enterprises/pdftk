<?php

declare(strict_types=1);

namespace AuroraSuite\Pdftk;

class Command extends \mikehaertl\pdftk\Command
{
    public function __construct(string $binaryPath, $options = null)
    {
        $this->_command = $binaryPath;

        parent::__construct($options);
    }
}
