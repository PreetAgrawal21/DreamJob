@extends('layouts.front-end-layouts.app')

@section('content')
  <style>
      *{
      padding: 0;
      margin: 0;
      text-decoration: none;
  }
  .body{
      box-sizing: border-box;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  .sidebar{
      background: rgb(76, 3, 247);
      margin-left: 20px;
      width: 250px;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 1;
      border-radius: 10px 10px 10px 10px;
  }
  .sidebar img{
      margin-left:90px;
  }
  .sidebar ul li a{
      font-size: 25px
  }
  .sidebar h2,h4{
      text-align: center;
      font-size: 20px;
      text-transform: uppercase;
      color: black;
      background-color: rgb(76, 3, 247);
      padding: 20px;
  }
  .sidebar ul li{
      margin: 25px 0;
  }
  .sidebar ul li a{
      color: rgb(219, 219, 219);
      padding: 0 30px;

  }
  .sidebar ul li a:hover{
      color:rgb(43, 241, 231);
      margin-left: 20px;
      transition: 0.4s;
  }
  .main{
      margin-left: 210px;
      padding: 5px;
      height: 70%;
  }
  .profileimg{
      width: 70px;
      height: 70px;
      border-radius: 100px;

  }
  .page-header {
      background: linear-gradient(rgba(43, 57, 64, .5), rgba(43, 57, 64, .5)), url(layouts/front-end/img/dashboard.png) center center no-repeat;
      background-size: cover;
    }
    form{
        margin: 8px;
    }
    .form-control{
        padding: 17px;
        margin-top: 10px;
    }
    .card{

        display: inline-block
    }
    .btn1{
      margin-top: 15px;
      color: white;
    }
      </style>
  <div class="body">
      <div class="container-xxl py-5 bg-dark page-header mb-5">
          <div class="container my-5 pt-5 pb-4">
              <h1 class="display-3 text-white mb-3 animated slideInDown">Edit Profile</h1>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb text-uppercase">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item text-white active" aria-current="page">Edit profile</li>
                  </ol>
              </nav>
          </div>
      </div>
      <!-- Header End -->
  @include('layouts.job.sidebar')

  <div class="col-sm-9 ">
  <div class="row">
      <div class="main col-sm">
        <div class="container-fluid">
                <h2>Edit Profile</h2>
                <div class="card" style="width: 50rem;">
                  <form action="Post" method="">
                      <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="First name" value="{{Auth::user()->name}}">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" value="{{Auth::user()->lname}}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <input type="Email" class="form-control" placeholder="Email" value="{{Auth::user()->email}}">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Contact number" value="{{Auth::user()->contact_no}}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Address" value="{{Auth::user()->address}}">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="City" value="{{Auth::user()->city}}">
                          </div>
                        </div>
                        <div class="row">
                            @role('candidate')
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Qualification" value="{{Auth::user()->qualification}}">
                              </div>
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Stream"value="{{Auth::user()->stream}}">
                              </div>
                            @endrole

                        </div>
                        <div class="row">
                          <div class="col">
                            <input type="date" class="form-control" placeholder="DOB" value="{{Auth::user()->dob}}">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Age"value="{{Auth::user()->age}}">
                          </div>
                        </div>
                        <div class="row">
                            <div class="col">
                              <textarea class="form-control" placeholder="About me" rows="3" value="{{Auth::user()->about_me}}"></textarea>
                            </div>
                        </div>
                        @role('candidate')
                        <div class="row">
                          <div class="col">
                            <input type="file" class="form-control" placeholder="Resume" value="{{Auth::user()->resume}}">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Skills" value="{{Auth::user()->skills}}">
                          </div>
                        </div>
                        @endrole

                  </form>
                  <form action="/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    @role('recruiter')
                      <h1>Company Details</h1>
                    <div class="row">
                        <div class="col">
                          <input type="file" class="form-control" placeholder="logo" name="logo">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="title" name="title">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="description" name="decription">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="website" name="website">
                        </div>
                      </div>
                      @endrole
                      <div class="row">
                        <div class="col">
                            <button class="btn1 btn-primary w-100 py-3" type="submit">Update</button>
                        </div>
                    </div>
                  </form>
                 </div>
              </div>
        </div>
      </div>
  </div></div>
@endsection
