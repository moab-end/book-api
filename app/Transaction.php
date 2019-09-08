<?php

namespace App;
use App\Book;
use App\Buyer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    //

    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable=[
    	'quantity',
    	'buyer_id',
    	'book_id'


    ];

    public function buyer(){
    	return $this->belongsTo(Buyer::class);
    }

    public function book(){
    	return $this->belongsTo(Book::class);
    }
}
