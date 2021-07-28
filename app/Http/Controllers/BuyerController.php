<?php

namespace App\Http\Controllers;

use App\Buyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyerController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function secondBuyerEloquent()
    {
        // $products = Buyer::offset(1)->limit(1)->get()->sortBy(function ($product) {
        //     return $product->total_item_taken;
        // })->values();

        $products = Buyer::offset(1)->limit(1)->get()->sortBy('total_item_taken');
         
        return view('second_buyer_eloquent', compact('products'));
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function secondBuyerNoEloquent()
    {
        $products = DB::table('buyers')
        ->join('diary_taken', 'buyers.id', '=', 'diary_taken.buyer_id')
        ->join('eraser_taken', 'buyers.id', '=', 'eraser_taken.buyer_id')
        ->join('pen_taken', 'buyers.id', '=', 'pen_taken.buyer_id')
        ->select('buyers.*', DB::raw('count(DISTINCT(diary_taken.id)) + count(DISTINCT(eraser_taken.id)) + count(DISTINCT(pen_taken.id)) as total'), DB::raw('count(DISTINCT(diary_taken.id)) as diary_taken'), DB::raw('count(DISTINCT(eraser_taken.id)) as eraser_taken'), DB::raw('count(DISTINCT(pen_taken.id)) as pen_taken'))
        ->groupBy('buyers.id')
         ->limit(1)
         ->offset(1)
        ->get();

        return view('second_buyer_no_eloquent', compact('products'));
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function purchaseListEloquent()
    {
        $products = Buyer::all()->sortBy('total_item_taken');
         
        return view('purches_list_eloquent', compact('products'));
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function purchaseListNoEloquent()
    {
        $products = DB::table('buyers')
        ->join('diary_taken', 'buyers.id', '=', 'diary_taken.buyer_id')
        ->join('eraser_taken', 'buyers.id', '=', 'eraser_taken.buyer_id')
        ->join('pen_taken', 'buyers.id', '=', 'pen_taken.buyer_id')
        ->select('buyers.*', DB::raw('count(DISTINCT(diary_taken.id)) + count(DISTINCT(eraser_taken.id)) + count(DISTINCT(pen_taken.id)) as total'), DB::raw('count(DISTINCT(diary_taken.id)) as diary_taken'), DB::raw('count(DISTINCT(eraser_taken.id)) as eraser_taken'), DB::raw('count(DISTINCT(pen_taken.id)) as pen_taken'))
        ->groupBy('buyers.id')
        ->orderBy('total')
        ->get();
         
        return view('purches_list_no_eloquent', compact('products'));
    }
}
