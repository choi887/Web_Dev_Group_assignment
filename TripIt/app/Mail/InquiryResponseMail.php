<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquiryResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $response;
    public $enquiry_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $response, $enquiry_id)
    {
        $this->name = $name;
        $this->response = $response;
        $this->enquiry_id = $enquiry_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.inquiry_response')
            ->subject('Thank You for Your Inquiry');
    }
}
