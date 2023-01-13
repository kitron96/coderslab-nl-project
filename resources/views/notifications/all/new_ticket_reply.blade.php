@php
    if (!isset($notification->data['subject'])) {
        $ticketReply = \App\Models\Ticket::find($notification->data['id']);
        $subject = $ticketReply->ticket->subject;
    } else {
        $subject = $notification->data['subject'];
    }
    $notificationUser = \App\Models\User::withoutGlobalScope(\App\Scopes\ActiveScope::class)->findOrFail($notification->data['user_id']);
@endphp

<x-cards.notification :notification="$notification" :link="route('tickets.show', $notification->data['ticket_number'])"
                      :image="$notificationUser->image_url"
                      :title="__('email.ticketReply.subject') . ' #' . $notification->data['ticket_number']" :text="$subject"
                      :time="$notification->created_at"/>
