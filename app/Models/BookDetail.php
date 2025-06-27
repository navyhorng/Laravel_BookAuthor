<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookDetail extends Model
{
    protected $table = 'tb_book_details';
    protected $primaryKey = ['author_id', 'book_id'];
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable =['author_id','book_id',];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'author_id');
    }
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'book_id');
    }
    protected function setKeysForSaveQuery($query)
    {
        $query 
            ->where('author_id', $this->getAttribute('author_id'))
            ->where('book_id', $this->getAttribute('book_id'));

        return $query;
    }
}
