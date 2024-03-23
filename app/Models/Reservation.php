<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ticket() {
        return $this->belongsTo(EventTicket::class);
    }

    public function getTicketInfosAttribute()
    {
        return $this->ticket->event->title . ' - ' . $this->ticket->name;
    }

    public function getFmtDateAttribute()
    {
        return getFormattedDate($this->created_at);
    }
}
