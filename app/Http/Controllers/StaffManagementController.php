<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffManagementModel;

class StaffManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('table.table', ['staff'=>StaffManagementModel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudstaffform.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new StaffManagementModel;
        $store->id = $request->id;
        $store->name = $request->name;
        $store->phone = $request->phone;
        $store->gender = $request->gender;
        $store->dateofbirth = $request->dateofbirth;
        $store->placeofbirth = $request->placeofbirth;
        $store->save();
        return redirect()->route('staffs.index');
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

        $edit = StaffManagementModel::find($id);
        return view('crudstaffform.update')->with("edit",$edit);
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
        $update = StaffManagementModel::find($id);
        $update->id = $request->id;
        $update->name = $request->name;
        $update->phone = $request->phone;
        $update->gender = $request->gender;
        $update->dateofbirth = $request->dateofbirth;
        $update->placeofbirth = $request->placeofbith;
        $update->save();
        return redirect()->route('staffs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = StaffManagementModel::find($id);
        $del->delete();
        return redirect()->route('staffs.index');
    }
}
