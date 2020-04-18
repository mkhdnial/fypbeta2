<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
    	$rentalList = list::all();
    	$data = [
    		'rentalList' =>$rentalList
    	];
    	return view ('rentalList.index',$data);
    }

    public function create()
    {
    	return view('rentalList.create');
    }

    public function store(Request $request)
    {
    	list::create($request->all());

    	return redirect('/owner');
    }

    public function edit(list $lists)
    {
    	return view ('rentalList.edit',compact('lists'));
    }

    public function update(Request $request,list $lists)
    {
    	$lists ->update($request->all());
    	return redirect('owner');
    }

    public function delete(list $lists)
    {
    	$lists->delete();
    	return redirect('/owner');	
    }
}
