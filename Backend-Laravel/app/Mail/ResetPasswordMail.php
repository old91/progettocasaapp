<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;
    public $password;
    public $name;
    public $surname;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$psw)
    {
        $this->name = $user->name;
        $this->surname = $user->surname;
        $this->password = $psw;

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->subject('Codice di Reset')->view('mail.resetPassword');          
    }
}