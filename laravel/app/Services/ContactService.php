<?php

namespace App\Services;

use Value;
use Notification;

class ContactService
{
    public function send(array $data)
    {
        try {
            $this->notify(
                $data['subject'],
                $data, 'g.novais1997@gmail.com'
            );
        } catch(\Throwable $e) {
            throw $e;
        }

        return "Mensagem enviada com sucesso";
    }

    public function notify($subject, $data, $target_email)
    {
        Notification::route('mail', $target_email)->notify(new ContactNotification($subject, $data));
    }
    
}
