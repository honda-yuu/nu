<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function Months()
    {
        //1つの投稿が多数の月を所持
        return $this->belongsToMany(Month::class);
    }

    protected $fillable = [
        'title',
        'body',
        'flower_mean',
        'money',
        'image_url',
    ];

    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('months')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    
}
