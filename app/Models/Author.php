<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'tb_authors';
    protected $primaryKey = 'author_id';
    protected $keyType = 'int';
    protected $fillable = ['author_name', 'gender', 'email', 'total_book'];

    public function books()
    {
        return $this->hasMany(Book::class, 'author_id', 'author_id');
    }

    public function bookDetails()
    {
        return $this->hasMany(BookDetail::class, 'author_id');
    }
}
