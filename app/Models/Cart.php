<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $guarded = ['id'];

    public function design()
    {
        return $this->belongsTo(Design::class, 'design_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
