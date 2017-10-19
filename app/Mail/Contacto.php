<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;
    public $nombre, $email, $asunto, $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $email, $asunto, $mensaje)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('sobre.contacto-email')
            ->subject('Mensaje de contacto desde página Web')
            ->from('contacto@redmexciteg.com','Contacto página Web');
    }
}
