<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];
    
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/fUved8X6titobl6ZfPS7JPuMoD796IBx25oKTWCv.png';
        return '/storage/' . $imagePath;
    }
    public function user () {
        return $this->belongsTo(User::class);
    }
}
