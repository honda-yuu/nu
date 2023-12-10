<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'month',
    ];
    
    
    public function posts()
    {
    //1つの月を多数の投稿が所持。
    return $this->belongsToMany(Post::class);
    }
}
