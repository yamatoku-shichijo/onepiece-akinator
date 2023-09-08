<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;
    
    protected $fillable = ['contet'];
    
    // この選択肢と問題の関係
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    
    // この選択肢と答えの関係
    public function choice_answer()
    {
        return $this->belongsToMany(Character::class, 'answers' , 'choice_id' , 'character_id')->withTimestamps();
    }
}
