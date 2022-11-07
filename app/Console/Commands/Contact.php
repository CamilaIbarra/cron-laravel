<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Contact extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends an email via cron';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to('test@email.com')
        ->send(
            (new \App\Mail\Contact())
            ->subject('Contact!')
        );
    }
}
