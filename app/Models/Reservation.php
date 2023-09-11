<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Reservation extends Model
{
    use HasFactory;
    use softDeletes;
    protected $softDelete = true;

    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'phone','message','restaurant','guest_number','res_date'];
}
