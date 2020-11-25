<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
    protected $filable = ['user_id','social_id','social_name','social_avatar'];
    //
    public function user(){
        return $this->belongsTo(User::class);
    }
}
