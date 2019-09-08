<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BuyerSellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buyer $buyer)
    {
        //
        $sellers=$buyer->transactions()->with('book.seller')
        ->get()
        ->pluck('book.seller')
        ->unique('id')
        ->values();

        return $this->showAll($sellers);
    }

}
