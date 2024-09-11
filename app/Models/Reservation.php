<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['room_name', 'reservation_date', 'start_time', 'end_time', 'client_name'];
}

//sai ph artisan make migratrion servet {{slot ampersan timepans  la mama de la parangaricutirmicuario alfa romeo ; aston mas}}