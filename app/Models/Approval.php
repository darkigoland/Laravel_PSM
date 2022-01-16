<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $table = 'approvals';
    protected $primaryKey = 'stud_id';
    protected $fillable = ['stud_name', 'proposal_status','proposal'];
}