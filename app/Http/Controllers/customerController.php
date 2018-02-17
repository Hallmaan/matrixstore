<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\restaurantProduct;
use App\stationaryProduct;
use App\transaction;
use Auth;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['users'] = User::get();
        return view('customer.customerform1')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = transaction::orderBy('id','desc')->first();
        if(count($transaksi) > 0)
        {
        $transaksi = $transaksi->id + 1;
        
        $transaksi = "TRNS000".$transaksi;
        }
        else
        {
        $transaksi = 1;
        $transaksi = "TRNS000".$transaksi;
        }
         $a = new transaction;
         $a->transaksi_code = $transaksi;
         $a->customer_code = Auth::user()->id;
         $product = restaurantProduct::find($request->input('id'));
         $a->supplier_code = $product->supplier_code;
         $a->product_code = $product->product_code;
         $a->jumlah = 1;
         $a->status = 'FALSE';

         $a->save();
         return redirect(url('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showingproduct($id)
    {
         $user = User::find($id);
         $product = restaurantProduct::where('supplier_code', $user->supplier_code)->get();
         return view('customer.customerform3')->with('product',$product); 
    }

    public function search(Request $request)
    {
        $store_type = $request->input('store_type');
        // dd($store_type);
        $data['users'] = User::where('store_type','like','%'.$store_type.'%')->get();

        return view('customer.customerform2')->with($data);
    }

    

}
