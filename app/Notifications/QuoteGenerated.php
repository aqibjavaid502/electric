<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Pushover\PushoverChannel;
use NotificationChannels\Pushover\PushoverMessage;

class QuoteGenerated extends Notification
{
    use Queueable;
    protected $data;
    protected $responseData;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data, $responseData)
    {
        $this->data = $data;
        $this->responseData = json_decode($responseData);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [PushoverChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return PushoverMessage::create('Great News - We have 3 engineers available near your post code'.$this->data['postcode'])
            ->title($this->data['contactno'])
            ->sound('incoming');
    }

    public function toPushover($notifiable)
    {
        return (new PushoverMessage())
        ->content("postcode: " . $this->data['postcode'] . "\ncontact no: " . $this->data['contactno'] . "\nname: " . auth()->user()->name . "\nquality: " . $this->responseData->result->quality . "\neastings: " . $this->responseData->result->eastings . "\nnorthings: " . $this->responseData->result->northings . "\ncountry: " . $this->responseData->result->country . "\nnhs_ha: " . $this->responseData->result->nhs_ha . "\nlongitude: " . $this->responseData->result->longitude . "\nlatitude: " . $this->responseData->result->latitude . "\neuropean_electoral_region: " . $this->responseData->result->european_electoral_region . "\nprimary_care_trust: " . $this->responseData->result->primary_care_trust . "\nregion: " . $this->responseData->result->region . "\nlsoa: " . $this->responseData->result->lsoa . "\nmsoa: " . $this->responseData->result->msoa . "\nincode: " . $this->responseData->result->incode . "\noutcode: " . $this->responseData->result->outcode . "\nparliamentary_constituency: " . $this->responseData->result->parliamentary_constituency . "\nadmin_district: " . $this->responseData->result->admin_district . "\nparish: " . $this->responseData->result->parish . "\nadmin_county: " . $this->responseData->result->admin_county . "\ndate_of_introduction: " . $this->responseData->result->date_of_introduction . "\nadmin_ward: " . $this->responseData->result->admin_ward . "\nced: " . $this->responseData->result->ced . "\nccg: " . $this->responseData->result->ccg . "\nnuts: " . $this->responseData->result->nuts . "\npfa: " . $this->responseData->result->pfa)
        ->title($this->data['contactno'])
        ->sound('incoming');
    }
    
}
