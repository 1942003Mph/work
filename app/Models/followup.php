<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class followup extends Model
{
    use HasFactory;
    protected $guarded = [] ;
    public function employees(){
        return $this->belongsToMany(employee::class  , 'jobid' , 'id');
    }
}
