<div class="row">
<div class="col-sm-2 col-12 mb-3 ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <div class="sidebar">
        <h2 class="h2head">My Dashboard</h2>
        <img src="{{ asset('layouts/wlc.jpg') }}" class="profileimg" alt="">
        <h4 class="h4head">Name</h4>
        <ul class="nav col-12  mb-3">
            <li>
                <a href="{{ route('job_dashboard') }}">
                    <i class="fa fa-user-plus"></i>Edit Profile
                </a>
            </li>
            @role('recruiter')
            <li>
                <a href=" {{ route('jobposts.index') }}">
                    <i class="fa fa-th-list"></i>
                    <span>Job listing</span>
                </a>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-building"></i>
                    <span>Company</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>application</span>
                </a>
            </li>
            @endrole
            <li>
                <a href="#">
                    <i class="fa fa-sign-out"></i>
                    <span>log out</span>
                </a>
            </li>
        </ul>
    </div>
</div>

