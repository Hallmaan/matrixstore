<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Hash;
use App\restaurantProduct;
use App\stationaryProduct;
use Auth;


class supplierController extends Controller
{
    public function index()
    {
    	return view('supplier.index');
    }


    public function addproduct()
    {
    if(Auth::user()->store_type == "Restaurant")
        {
        $user = restaurantProduct::orderBy('id','desc')->first();
        if(count($user) > 0)
        {
        $user = $user->id + 1;
        
        $user = "REST000".$user;
        }
        else
        {
        $user = 1;
        $user = "REST000".$user;
        }
            $a = new restaurantProduct;
            $a->makanan = input::get('makanan');
            $a->minuman = input::get('minuman');
            $a->hidangan_penutup = input::get('Hidangan');
            $a->harga = input::get('harga');
            $a->stok = input::get('stok');
            $a->status = input::get('Status');
            $a->product_code = $user;
            $z = Auth::user()->supplier_code;
            $a->supplier_code = $z;
            // dd($z);
            $a->save();
        }
    else
        {
            $k = stationaryProduct::orderBy('id','desc')->first();
            if(count($k) > 0)
            {
            $k = $k->id + 1;
        
            $k = "STAT000".$k;
            }
            else
            {
            $k = 1;
            $k = "STAT000".$k;
            }
            $b = new stationaryProduct;
            $b->alat_tulis = input::get('alat_tulis');
            $b->alat_hapus = input::get('alat_hapus');
            $b->kertas = input::get('kertas');
            $b->harga = input::get('harga');
            $b->stok = input::get('stok');
            $b->status = input::get('status');
            $b->product_code = $k;
            $n = Auth::user()->supplier_code;
            $b->supplier_code = $n;
            $b->save(); 
         }
            return redirect(url('supplier/viewproduct'));
         }

    public function viewproduct()
    {
        $data['users'] = User::get();
        $data['restaurant'] = restaurantProduct::get();
        $data['stationary'] = stationaryProduct::get();
        return view('supplier.viewproduct')->with($data);
    }

    public function destroy($id)
    {
        if(Auth::user()->store_type == "Restaurant")
        {
         $data = restaurantProduct::find($id);
         $data->delete();
        }
        else
        {
         $data = stationaryProduct::find($id);
         $data->delete(); 
        }
         return redirect(url('supplier/viewproduct'));
    }

    public function regis()
    {
    	return view('supplier.register');
    }

    public function add(request $request) {

    $user = User::orderBy('id','desc')->first();
    if(count($user) > 0)
    {
        $user = $user->id + 1;
        
        $user = "SPC000".$user;
    }
    else
    {
        $user = 1;
        $user = "SPC000".$user;
    }

    $a = new User;
    $a->name = input::get('name');
    $a->store_name = input::get('store');
    $a->store_address = input::get('Address');
    $a->store_type = input::get('typestore');
    $a->store_slogan = input::get('slogan');
    $a->email = input::get('email');
    $a->password = Hash::make(Input::get('password'));
    $a->role = 3;
    $a->supplier_code = $user;
    $a->status = 'FALSE';
    //$hashed = Hash::make($password);
   // $a->slogan = input::get('slogan');
    
    $a->save();
    return redirect(url('login'));
  }

}
