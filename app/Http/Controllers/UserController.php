<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Models\User;
use DataTables;
use Spatie\Permissions\Model\Role;
use Spatie\Permissions\Model\Permission;
use DB;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'email'      => 'required',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        $user = new User();
        $user->name = $request->name;
        $user->lname = $request->lname;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->contact_no = $request->contact_no;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->qualification = $request->qualification;
        $user->stream = $request->stream;
        $user->age = $request->age;
        $user->dob = $request->dob;
        $user->about_me = $request->about_me;
        $user->resume = $request->resume;
        $user->skills = $request->skills;
        $user->save();

        $notification = array(
			'message'		=> 'User added successfully',
			'alert-type'	=> 'error'
		);

		return view('users.create', ['roles' => $model->get(['id', 'name'])]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

          return view('users.edit',compact('user','roles','userRole'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('layouts.admin.user.edit',compact('user'));
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

        $request->validate([
            'name'       => 'required',
            'email'     => 'required',
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->with('success','User updated successfully');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
			$data = User::select('*');
			return Datatables::eloquent($data)
				->addIndexColumn()
				->addColumn('action', function($row){
					$btn = view('layouts.admin.user.basic.user-action-datatable', compact('row'))->render();
					return $btn;
				})
				->rawColumns(['action'])
				->make(true);
		}
        return view('users');
    }


}
