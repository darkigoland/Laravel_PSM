<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitleModel extends Model
{
    use HasFactory;

    protected $titleFill = [
        'titleName', 'titleObj','titleScope', 'titleBackground', 'titleSoftware', 'titleTool'
    ];
}
