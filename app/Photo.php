<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable =  [ 'file'];
    protected $dir = "/images/";

    public function getFileAttribute($file)
    {
        return $this->dir . $file;
    }
}
