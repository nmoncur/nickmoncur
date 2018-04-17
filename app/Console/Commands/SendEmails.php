<?php

namespace App\Console\Commands;

use App\Mail;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail as Email;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send emails queued in mail table';

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
     * @return mixed
     */
    public function handle()
    {
        $startTime = Carbon::now();
        $this->info('\/ Starting ' . $startTime);

        $emails = Mail::where('sent', 0)->get();

        if($emails->isEmpty()) {
            $this->info('No emails to send');
        }

        foreach($emails as $email) {
            Email::send('emails.' . $email->template, ['user' => $email->contact], function ($message) use ($email) {
                $message->from('nick@nickmoncur.com', 'Nick Moncur');
                $message->bcc('nmoncur10@gmail.com', 'Nick Moncur');

                $message->to($email->contact->email, $email->contact->name);
                $message->subject($email->subject);
            });

            $email->sent = 1;
            $email->save();
            $this->info('Emailed ' . $email->contact->email . ' ' . $email->template);
        }

        $this->info('/\ All done - ' . $startTime->diffInSeconds() . ' seconds elapsed');
    }
}
