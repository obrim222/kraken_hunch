<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use  Spatie\WebhookClient\Models\WebhookCall;
class ChargeSucceededJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /** var Spatie\WebhookClient\Models\WebhookCall */
    public $webHookCall;
    /**
     * Create a new job instance.
     *public $webHookCall;
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $charge = $this->webhookCall->payload['data']['object'];

        $user = User::where('stripe_id', $charge['customer'])->first();
        if ($user) {
            Payment::create(['user_id' => $user->id,'subtotal' => $charge['amount'], 'total' => $charge['amount'], 'strip_id' => $charge['id']        ]);
        }
   }


}
