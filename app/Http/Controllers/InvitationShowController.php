<?php

namespace App\Http\Controllers;

use App\Models\Invitation;

class InvitationShowController extends Controller
{
    public function index(string $slug)
    {
        $invitation = Invitation::with('template')
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $payload = $invitation->payload;
        $eventDate = '2026-06-28 08:00:00';
        $start = \Carbon\Carbon::parse($eventDate);
        $end = \Carbon\Carbon::parse($eventDate)->addHours(3);

        $googleCalendarUrl =
            'https://calendar.google.com/calendar/render?action=TEMPLATE'
            . '&text=' . urlencode('Wedding of A & T')
            . '&dates=' . $start->format('Ymd\THis')
            . '/' . $end->format('Ymd\THis')
            . '&details=' . urlencode('Kami mengundang Anda untuk hadir.')
            . '&location=' . urlencode('Surabaya');

        return view(
            'themes.' . $invitation->template->view_name . '.index',
            [
                'invitation' => $invitation,
                'payload' => $invitation->payload,
                'googleCalendarUrl' => $googleCalendarUrl,
            ]
        );
    }
}