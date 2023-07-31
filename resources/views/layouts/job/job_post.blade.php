@extends('layouts.front-end-layouts.app')

@section('content')
<style>
    .container1{
        max-width: 800px;
padding: 45px 0 45px 300px;
        position: relative;   
    }
    .button1{
        width: 150px;   
    }
    .container1 mb-3{
        margin: 0;
        display: block;
    }
    
    .page-header {
    background: linear-gradient(rgba(43, 57, 64, .5), rgba(43, 57, 64, .5)), url(layouts/front-end/img/jobposting.jpg) center center no-repeat;
    background-size: cover;
   }
 </style>
    

<div class="container-xxl py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Job Post</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Job post</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container1 col-sm-4 mb-3">
    <h4 class="mb-4">Job post form</h4>
    <form>
        <div class="row g-3">
            <div class="col-12 col-sm-4 mb-3">
                <input type="text" class="form-control" placeholder="job title">
            </div>
            <div class="col-6 col-sm-4 mb-3">
                <input type="email" class="form-control" placeholder="Minimum salary">
            </div>
            <div class="col-6 col-sm-4 mb-3">
                <input type="text" class="form-control" placeholder="Maximum salary">
            </div>
            <div class="col-12 col-sm-4 mb-3">
                <input type="text" class="form-control" placeholder="Experince needed">
            </div>
            <div class="col-12 col-sm-4 mb-3">
                <input type="text" class="form-control" placeholder="Qualification">
            </div>
            <div class="col-12 col-sm-4 mb-3 ">
                <input type="text" class="form-control" placeholder="vacancies">
            </div>
            <div class="col-12  col-sm-4 mb-3">
                <textarea class="form-control" rows="5" placeholder="Job description"></textarea>
            </div>
            <div class="col-12  col-sm-4 mb-3 button1">
                <button class="btn btn-primary w-100" type="submit">Post A Job</button>
            </div>
        </div>
    </form>
</div>
@endsection