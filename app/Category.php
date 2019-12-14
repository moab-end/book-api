<?php

namespace App;
use App\Book;
use App\Transformers\CategoryTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;



    protected $dates=['deleted_at'];

    public $transformer=CategoryTransformer::class;

    protected $fillable= [
    	'name',
    	'description',


    	];

    protected $hidden=['pivot'];


    public function books(){

    	return $this->belongsToMany(Book::class);
    }




}
