<?php

use function PHPUnit\Framework\assertEquals;

it('reads architecture from config', function () {
    assertEquals(trim(shell_exec('uname -m')), config('pdftk.architecture'));
});
