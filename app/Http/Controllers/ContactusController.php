<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use DataTables;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin.contact-us.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $contactUs = new ContactUS();
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->subject = $request->subject;
        $contactUs->message = $request->message;
        $contactUs->save();
        $notification = array(
			'message'		=> 'User added successfully',
			'alert-type'	=> 'error'
		);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $contactUs = ContactUs::find($id);

        $notification = array(
            'message'  => 'jobs deleted Successfully!',
            'alert-type'=> 'error'
        );
        return redirect()->route('contact-us.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
    public function getData(Request $request)
    {
        if ($request->ajax()) {
			$data = ContactUs::select('*');
			return DataTables::eloquent($data)
				->addIndexColumn()
				->addColumn('action', function($row){
					$btn = view('layouts.admin.contact-us.basics.contact-us-action-datatable', compact('row'))->render();
					return $btn;
				})
				->rawColumns(['action'])
				->make(true);
		}
        return view('contacts');
    }
}
