<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    public function expertise_category(){
        return $this->belongsTo(ExpertiseCategory::class, 'exp_cat_id', 'id');
    }

    public function lecturer_expertise(){
        return $this->belongsTo(User::class, 'lect_id', 'id');
    }
}
