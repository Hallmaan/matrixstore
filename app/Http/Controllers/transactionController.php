<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaction;
use App\restaurantProduct;

class transactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['transactiontrue'] = transaction::where('status', 'TRUE')->get();
        $data['transactionfalse'] = transaction::where('status', 'FALSE')->get();
        // return view('admin.managesupplier')->with($data);
       // $data['transaction'] = transaction::get();
        return view('transaction.index')->with($data);
    }

    public function activate(Request $request)
    {
      $transaction = transaction::findOrFail($request->id);
      // $product = restaurantProduct::find($transaction);
      // dd($product);
      // $hasil = $product->stok - $transaction->jumlah;
      // $product->stok = $hasil;
      // $product->save();
      $transaction->status = 'TRUE';
      $transaction->save();
      return redirect(url('transaction/index'));
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
        //
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
}
