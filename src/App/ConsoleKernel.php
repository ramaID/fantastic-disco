<?php

namespace App;

use Illuminate\Console\Scheduling\Schedule;

class ConsoleKernel extends \Illuminate\Foundation\Console\Kernel
{
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
    }
}
