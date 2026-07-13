<?php

// config for AuroraSuite/Pdftk
return [
    'architecture' => env('PDFTK_ARCHITECTURE', filled($arc = shell_exec('uname -m')) ? $arc : 'x86_64'),
];
