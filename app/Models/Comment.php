<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\SelfReferential;

class Comment extends Model
{
    use HasFactory;
    use SelfReferential;

    public $fillable = [
        'user_name',
        'comment',
        'parent_id'
    ];
}
