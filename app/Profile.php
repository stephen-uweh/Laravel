<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/o7rZeda8MSfpskGHDkm3X43EMItz9VAUCWSo85zF.png';
        return '/storage/' . $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
