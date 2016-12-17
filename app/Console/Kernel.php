<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The INNOVATE commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\Inspire::class,
        Commands\Maker::class,
        //\Innovate\Console\Sample\SampleCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('inspire')->hourly();
        $schedule->command('maker')->hourly();
    }
}
