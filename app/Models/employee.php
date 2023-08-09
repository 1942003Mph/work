<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class employee extends Model
{
    use HasFactory;
    protected $guarded = [] ;
    public function followup(){
        return $this->hasMany(followup::class , 'employees_id' , 'id');
    }
    // public function mission(){
    //     return $this->hasMany(mission::class);
    // }
}
