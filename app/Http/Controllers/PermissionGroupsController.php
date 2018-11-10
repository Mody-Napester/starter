<?php

namespace App\Http\Controllers;

use App\PermissionGroup;
use Illuminate\Http\Request;
use Validator;

class PermissionGroupsController extends Controller
{
    /**
     * Class object
     * @var resource
     */
    public $resource;

    /**
     * PermissionGroupsController constructor.
     */
    public function __construct()
    {
        $this->resource = new PermissionGroup();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['resources'] = PermissionGroup::all();
        return view('permission_groups.index', $data);
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
        // Check permissions

        // Check validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:permission_groups'
        ]);

       // dd($validator);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        // Do Code
        $resource = PermissionGroup::store([
            'name' => $request->name,
            'created_by' => auth()->user()->id,
            'updated_by' => auth()->user()->id
        ]);

        // Return
        if ($resource){
            return back();
        }
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
