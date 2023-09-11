<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class AdminResturant extends Model
{
    use HasFactory;
    use softDeletes;
    protected $softDelete = true;

    protected $table = 'resturants';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'image', 'location', 'number_of_tables'];
}
