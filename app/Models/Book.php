<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'tb_books';
    protected $primaryKey = 'book_id';
    public $timestamps = true;
    protected $fillable = ['book_title','type','description'];

    public function bookDetails(){
        return $this->hasMany(BookDetail::class, 'book_id');
    }
}
