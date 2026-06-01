<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $guarded = ['id'];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    protected $casts = [
        'payload' => 'array',
        'event_date' => 'date',
    ];
}
