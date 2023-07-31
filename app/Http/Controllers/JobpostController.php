<?php

namespace App\Http\Controllers;


use App\Models\JobPost;
use Illuminate\Http\Request;
use DataTables;

class JobpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.job.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.job.create');
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
            'job_title'  => '',
            'min_salary' => '',
        ]);
        $JobPost = new JobPost();
        $JobPost->job_title = $request->job_title;
        $JobPost->min_salary = $request->min_salary;
        $JobPost->max_salary = $request->max_salary;
        $JobPost->experince = $request->experince;
        $JobPost->qualification = $request->qualofication;
        $JobPost->description = $request->description;
        $JobPost->save();



        $notification = array(
            'message' => 'job added successfully',
            'alert-type' => 'error'
        );
        return redirect()->route('jobposts.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPost  $JobPost
     * @return \Illuminate\Http\Response
     */
    public function show(JobPost $JobPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPost  $JobPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $JobPost = JobPost::find($id);

        return view('layouts.job.edit',compact('JobPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobPost  $JobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'job_title' => '',
            'min_salary' => '',
        ]);

        $JobPost = JobPost::find($id);
        $JobPost->job_title = $request->job_title;
        $JobPost->update();

        $notification = array(
            'message' => 'jobs updaetd successfully',
            'alert-type' => 'error'
        );
        return redirect()->route('jobposts.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPost  $JobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $JobPost = JobPost::find($id)->delete();

        $notification =array(
            'message' => 'Data deleted successfully',
            'alert-type' => 'error'
        );
        return redirect()->route('jobposts.index')->with($notification);
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {

			$data = JobPost::select('*');

			return DataTables::eloquent($data)
				->addIndexColumn()
				->addColumn('action', function($row){
					$btn = view('layouts.job.basic.job-post-action-datatable', compact('row'))->render();
					return $btn;
				})
				->rawColumns(['action'])
				->make(true);
		    }
            return view('jobs');
        }

        public function search()
            {
            $search_text = $_GET['search'];
            $jobposts = JobPost::where('job_title', 'LIKE', '%'.$search_text.'%')->get();

            return view('layouts.front-end-layouts.job_list');
        }
}
