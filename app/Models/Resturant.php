<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Resturant extends Model
{
    use HasFactory;
    protected $table = 'resturants';
    protected $fillable = ['name','description','image','id','location'];

 public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
