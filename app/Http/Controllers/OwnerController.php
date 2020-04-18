<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
    public function index()
    {
    	$rentalList = Owner::all();
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
    	Owner::create($request->all());

    	return redirect('/owner');
    }

    public function edit(Owner $owner)
    {
    	return view ('rentallist.edit',compact('owner'));
    }

    public function update(Request $request,Owner $owner)
    {
    	$owner ->update($request->all());
    	return redirect('owner');
    }

    public function delete(Owner $owner)
    {
    	$owner->delete();
    	return redirect('/owner');	
    }
}
