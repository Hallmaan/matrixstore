<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class adminController extends Controller
{
	
    public function index()
    {
    	return view('admin.index');
    } 

    public function show(Request $request)
    {
        // $data = User::where('id', '=', $request->input('id'))->value('status');
    	$data['userstrue'] = User::where('status', 'TRUE')->get();
        $data['usersfalse'] = User::where('status', 'FALSE')->get();
    	return view('admin.managesupplier')->with($data);
    } 

    public function activate($id)
    {
      $a = User::find($id);
      // dd($a);
      $a->status = 'TRUE';
      $a->save();
      return redirect(url('admin/managesupplier'));
    }
}
