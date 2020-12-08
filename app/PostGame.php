<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class PostGame extends Model
{
    protected $fillable = ['game','company_id'];

    public function Company(){
        return $this->belongsTo(Company::class);
    }
}
