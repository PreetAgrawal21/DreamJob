<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use DataTables;

class JobController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin.job.index');
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
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobs = Jobs::find($id);

        $notification = array(
            'message'  => 'jobs deleted Successfully!',
            'alert-type'=> 'error'
        );
        return redirect()->route('jobs.index')->with($notification);
    }
    public function getData(Request $request)
    {
        if ($request->ajax()) {
			$data = Jobs::select('*');
			return Datatables::eloquent($data)
				->addIndexColumn()
				->addColumn('action', function($row){
					$btn = view('layouts.admin.job.basic.user-action-datatable', compact('row'))->render();
					return $btn;
				})
				->rawColumns(['action'])
				->make(true);
		}
        return view('jobs');
    }

    // public function search(Request $request)
    // {
    //     if ($request->q) {
    //         $jobs = Jobs::where('job_title', 'LIKE', '%' . $request->q . '%');

    //     } else {
    //         $jobs = Jobs::take(30);
    //     }

    //     $jobs = $jobs->has('company')->with('company')->paginate(6);

    //     return $jobs->toJson();
    // }
}
