<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
//relationship declaration with students(User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
//relationship declaration with course

    public function course()
    {
        return $this->belongsTo(course::class);
    }
}
