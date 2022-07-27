<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    //para ir a llamar en la vista con el nombre excerpt y con 120 caracteres maximo
    public function getExcerptAttribute(){

        return substr($this->content,0,120);
    }

    //llamar en la vista con diferente nombre
    public function getPublishedAttribute(){

        return $this->created_at->format('d-m-Y');
    }
}
