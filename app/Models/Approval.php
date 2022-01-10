<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Approval extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'stud_name', 'stud_id','stud_proposal', 'proposal_status'
    ];
}