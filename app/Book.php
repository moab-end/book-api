<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Seller;
use App\Transaction;

class Book extends Model
{
    //s
    const AVAILABLE_BOOK='available';
    const UNAVAILABLE_BOOK='unavailable';

    protected $fillable=[
		'title',
		'description',
		'quantity',
		'status',
		'image',
		'seller_id',


    ];

    public function isAvailable(){

    	return $this->status==Product::AVAILABLE_BOOK;
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
    
}
