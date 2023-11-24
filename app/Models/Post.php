<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','category_id','content','image_path','is_published'];

    //Relacion uno a muchos inversa

     public function category(){
        return $this->belongsTo(Category::class);
     }

     public function tags(){
        return $this->BelongsToMany(Tag::class);
     }



}
