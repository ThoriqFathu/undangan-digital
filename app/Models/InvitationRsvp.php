<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvitationRsvp extends Model
{
    protected $fillable = [
        'invitation_id',
        'name',
        'attendance',
        'guest_count',
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
