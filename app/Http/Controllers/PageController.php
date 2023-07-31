<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Joblist;
use App\Models\Role;
use App\Models\User;
use App\Models\contactUs;
class PageController extends Controller
{
    public function index()
	{
        $lists = Joblist::get();
		return view('layouts.front-end-layouts.index',compact('lists'));
	}

    public function getRegisterform()
	{
        $roles = Role::where('name','!=','admin')->get();

		return view('auth.register',compact('roles'));
	}

    public function aboutUs()
	{
		return view('layouts.front-end-layouts.about_us');
	}
    public function contactUs()
	{
		return view('layouts.front-end-layouts.contact_us');
	}


    public function joblist()
	{
        $lists = Joblist::get();
        // $min_salarys = Joblist::get();
        // $max_salarys = Joblist::get();
        // $experince = Joblist::get();
        // $qualification = Joblist::get();
        // $description = Joblist::get();

		return view('layouts.front-end-layouts.job_list',compact('lists'));
	}
    public function jobdetail($id)
	{
        $list = Joblist::where('id',$id)->first();
		return view('layouts.front-end-layouts.job_detail',compact('list'));
	}
    public function category()
	{
		return view('layouts.front-end-layouts.category');
	}
    public function testimonial()
	{
		return view('layouts.front-end-layouts.testimonial');
	}
    public function error()
	{
		return view('layouts.front-end-layouts.404');
	}
	public function jobpost()
	{
		return view('layouts.job.job_post');
	}
	public function dashboard()
	{
		return view('layouts.admin.user.dashboard');
	}
	public function profile(Request $request)
	{

		return view('layouts.job.editprofile');
	}
    public function company(Request $request)
    {
        $company = new Company();
        $company->title = $request->title;
        $comapny->decription = $request-> decription;
        $comapny->website = $request->website;
        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('docs/',$filename);
            $company->logo = $filename;
        }
        $comapny->save();
        return redirect()->back()->with('status','image added successfully');
    }
    public function companyregister()
    {
        return view('layouts.job.company');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        return $name;
    }

    // public function searchrecord(Request $request)
    // {
    //     if($request->isMethod('post'))
    //     {
    //         $title = $request->get('search');
    //         $data = Joblist::where('job_title','LIKE','%' . $title . '%')->paginate(5);

    //         return view('layouts.front-end-layouts.job_list',compact('data'));
    //     }
    // }
    // public function searchauthcomplete(Request $request){
    //     $query = $request->get('term','');
    //     $jobs = Jobs::where('title', 'LIKE', '%'.$query. '%')->where('status', '0')->get();
    //     $data = [];
    //     foreach ($jobs as $job) {
    //          $data[] = [
    //             'value'=>$job->title,
    //             'id'=>$job->id
    //          ];
    //         }
    //         if(count ($data))
    //         {
    //             return $data;
    //         }
    //         else
    //         {
    //             return ['value'=>'No Result Found','id'=>''];
    //         }

    // }
    // public function filter()
    // {
    //     return view("layouts.front-end-layouts.job_list");
    // }
    // public function filter_search(Request $request)
    // {
    //     $jobs = Joblist::search($request->searchText)->get();
    //     return view('layouts.front-end-layouts.job_list',compact('jobs'));
    // }

    public function search(Request $request){
       $title = $request->input('title');

        //$title = 'Laravel';
       // dd($title);

        // $lists = Company::with('joblists')->where(function (Joblist $joblist) use($title) {
        //     $joblist->where('job_title','like', "%$title%");
        // })->get();


        $lists = Joblist::with('company')->where('job_title','like', "%$title%")->get();

       // dd($lists);

        return view('layouts.front-end-layouts.job_list',compact('lists'));
    }
}
