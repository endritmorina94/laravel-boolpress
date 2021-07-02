<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPostNotification extends Mailable
{
    use Queueable, SerializesModels;

    //Dichiaro una nuova variabile dell'oggetto
    protected $post_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    //Tramite la funzione construct passo le informazioni del post
    public function __construct($_post_data)
    {
        $this->post_data = $_post_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'post_data' => $this->post_data
        ];

        return $this->view('mails.new-post', $data);
    }
}
