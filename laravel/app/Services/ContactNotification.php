<?php

namespace App\Services;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ContactNotification extends Notification
{
   use Queueable;
   protected $data;

   /**
   * Create a new notification instance.
   *
   * @return void
   */
   public function __construct(string $subject, array $data)
   {
      $this->subject = $subject;
      $this->data    = $data;
   }

   /**
   * Get the notification's delivery channels.
   *
   * @param  mixed  $notifiable
   * @return array
   */
   public function via($notifiable)
   {
      return ['mail'];
   }

   /**
   * Get the mail representation of the notification.
   *
   * @param  mixed  $notifiable
   * @return \Illuminate\Notifications\Messages\MailMessage
   */
   public function toMail($notifiable)
   {
      $data = $this->data;
      $subject = $this->subject;
      $noreply_email = env('MAIL_USERNAME');

      return (new MailMessage)
      ->from($noreply_email, "Site Esoftgraff")
      ->subject($subject)
      ->view('emails.contact', compact('data'));
   }

   /**
   * Get the array representation of the notification.
   *
   * @param  mixed  $notifiable
   * @return array
   */
   public function toArray($notifiable)
   {
      return [
         //
      ];
   }
}
