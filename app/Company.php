<?php

namespace App;

use App\PostGame;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name','email','password','description'];

    public function game(){
        return $this->hasMany(PostGame::class);
    }

}
