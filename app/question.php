<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable=['title','body','slug'];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value){
        $this->attributes['title']=ucfirst($value);
        $this->attributes['slug']=str_slug($value);
    }
}
