<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'form_schema' => 'array',
        'default_payload' => 'array',
    ];

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
}
