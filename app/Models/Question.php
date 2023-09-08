<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    
    protected $fillable = ['content'];
    
    // この問題と選択肢の関係
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
