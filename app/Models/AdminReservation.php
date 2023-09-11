<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class AdminReservation extends Model
{
    use HasFactory;
    use softDeletes;
    protected $softDelete = true;

    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'phone', 'res_date', 'guest_number', 'restaurant', 'message'];
}
