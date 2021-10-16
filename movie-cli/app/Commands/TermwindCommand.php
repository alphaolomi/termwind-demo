<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use function Termwind\{render};

class TermwindCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'termwind {name=Artisan}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Display an termwind rendered html';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        render(<<<'HTML'
            <div>
                <div class="p-1 bg-green-300">Termwind</div>
                <em class="ml-1">
                Give your CLI apps a unique look
                </em>
            </div>
        HTML);
    }
}
