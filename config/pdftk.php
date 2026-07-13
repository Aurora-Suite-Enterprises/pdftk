<?php

// config for AuroraSuite/Pdftk
return [
    'architecture' => env('PDFTK_ARCHITECTURE', filled($arc = trim(shell_exec('uname -m'))) ? $arc : 'x86_64'),
];
