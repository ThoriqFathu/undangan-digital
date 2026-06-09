<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\InvitationRsvp;
use App\Models\InvitationWish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        // return view(
        //     'themes.motion.index',
        //     [
        //         'invitation' => $invitation,
        //         'payload' => $invitation->payload,
        //         'googleCalendarUrl' => $googleCalendarUrl,
        //     ]
        // );
        $wishes = InvitationWish::query()
            ->where('invitation_id', $invitation->id)
            ->latest()
            ->get();

        $rsvps = InvitationRsvp::query()
            ->where('invitation_id', $invitation->id)
            ->get()
            ->keyBy('name');

        return view('themes.motion.index', [
            'invitation' => $invitation,
            'payload' => $invitation->payload,
            'googleCalendarUrl' => $googleCalendarUrl,
            'wishes' => $wishes,
            'rsvps' => $rsvps,
        ]);
    }
    public function store(Request $request)
    {
        // dd('sas');
        $validated = $request->validate([
            'invitation_id' => ['required', 'exists:invitations,id'],
            'name' => ['required'],
            'attendance' => ['required', 'in:yes,no'],
            'message' => ['required'],
        ]);
        $invitation = Invitation::findOrFail(
            $validated['invitation_id']
        );
        DB::transaction(function () use ($validated, $invitation) {

            InvitationWish::create([
                'invitation_id' => $invitation->id,
                'name' => $validated['name'],
                'message' => $validated['message'],
            ]);

            InvitationRsvp::updateOrCreate(
                [
                    'invitation_id' => $invitation->id,
                    'name' => $validated['name'],
                ],
                [
                    'attendance' => $validated['attendance'],
                ]
            );
        });

        return redirect()->back();
    }
    // public function index(string $slug)
    // {
    //     $invitation = Invitation::with('template')
    //         ->where('slug', $slug)
    //         ->where('status', 'published')
    //         ->firstOrFail();

    //     $payload = $invitation->payload;
    //     $eventDate = '2026-06-28 08:00:00';
    //     $start = \Carbon\Carbon::parse($eventDate);
    //     $end = \Carbon\Carbon::parse($eventDate)->addHours(3);

    //     $googleCalendarUrl =
    //         'https://calendar.google.com/calendar/render?action=TEMPLATE'
    //         . '&text=' . urlencode('Wedding of A & T')
    //         . '&dates=' . $start->format('Ymd\THis')
    //         . '/' . $end->format('Ymd\THis')
    //         . '&details=' . urlencode('Kami mengundang Anda untuk hadir.')
    //         . '&location=' . urlencode('Surabaya');

    //     return view(
    //         'themes.' . $invitation->template->view_name . '.index',
    //         [
    //             'invitation' => $invitation,
    //             'payload' => $invitation->payload,
    //             'googleCalendarUrl' => $googleCalendarUrl,
    //         ]
    //     );
    // }
}