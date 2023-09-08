<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];
    
    // このキャラクターとanswersテーブルの関係
    public function character_answer()
    {
        return $this->belongsToMany(Choice::class, 'answer' , 'character_id' , 'choice_id')->withTimestamps();
    }
    
    // このキャラクターとrecordsテーブルの関係
    public function character_records()
    {
        return $this->belongsToMany(User::class , 'records' , 'character_id' , 'user_id')->withTimestamps();
    }
}
