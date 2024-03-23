<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getFmtDateAttribute() {
        Carbon::setLocale('fr');
        $new_date = Carbon::createFromDate($this->date);
        $new_date_format = $new_date->day . ' ' . $new_date->monthName . ' ' . $new_date->year;
        return ucwords($new_date_format);
    }

    public function tickets()
    {
        return $this->hasMany(EventTicket::class);
    }
}
