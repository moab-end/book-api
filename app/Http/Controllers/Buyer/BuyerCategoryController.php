<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BuyerCategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buyer $buyer)
    {
        //
        $categories=$buyer->transactions()->with('book.categories')
        ->get()
        ->pluck('book.categories')
        ->collapse()
        ->unique('id')->values();
        

        return $this->showAll($categories);
    }

    
}
