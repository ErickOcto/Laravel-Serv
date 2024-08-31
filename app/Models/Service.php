<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function user_experience(){
        return $this->hasMany(UserExperience::class);
    }

    public function user_advantage(){
        return $this->hasMany(UserAdvantage::class);
    }

    public function service_thumbnail(){
        return $this->hasMany(ServiceThumbnail::class);
    }

    public function tagline(){
        return $this->hasMany(Tagline::class);
    }

    public function order(){
        return $this->hasMany(Order::class);
    }
}
