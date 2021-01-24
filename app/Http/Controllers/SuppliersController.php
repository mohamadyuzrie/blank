<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['resources'] = Supplier::get();

        return view('suppliers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert should happen here
        // dd($request->all());
        $resource = Supplier::create([
            'code' => $request['code'],
            'name' => $request['name'],
            'address' => $request['address'],
            'tel_no' => $request['tel_no'],
            'fax_no' => $request['fax_no'],
            'email' => $request['email'],
        ]);

        return redirect()->route('suppliers.edit', $resource->id);
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
        $data = [];
        $data['resource'] = Supplier::find($id);

        return view('suppliers.edit', $data);
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
        $resource = Supplier::find($id);
        $resource->update([
            'code' => $request['code'],
            'name' => $request['name'],
            'address' => $request['address'],
            'tel_no' => $request['tel_no'],
            'fax_no' => $request['fax_no'],
            'email' => $request['email'],
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resource = Supplier::find($id);
        $resource->delete();

        return redirect()->route('suppliers.index');
    }
}