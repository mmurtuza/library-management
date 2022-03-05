<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Nexmo\Laravel\Facade\Nexmo;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        try {

            $basic  = new \Nexmo\Client\Credentials\Basic(env("NEXMO_KEY"), env("NEXMO_SECRET"));
            $client = new \Nexmo\Client($basic);

            $receiverNumber = "8801706103857";
            $message = "Your book is issued";

            $message = $client->message()->send([
                'to' => $receiverNumber,
                'from' => 'Vonage APIs',
                'text' => $message
            ]);

            dd('SMS Sent Successfully.');
        } catch (Exception $e) {
            dd("Error: " . $e->getMessage());
        }
    }
}
