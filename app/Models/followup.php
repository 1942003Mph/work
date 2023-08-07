<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class followup extends Model
{
    use HasFactory;
    public function employee(){
        return $this->belongsTo(employee::class  , 'employees_id' , 'id');
    }
}
