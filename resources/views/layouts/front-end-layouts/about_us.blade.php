@extends('layouts.front-end-layouts.app')

@section('content')
    <style>
      .page-header {
       background: linear-gradient(rgba(43, 57, 64, .5), rgba(43, 57, 64, .5)), url(layouts/front-end/img/aboutus1.jpg) center center no-repeat;
       background-size: cover;
      }
    </style>
    <!-- Header End -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0 about-bg rounded overflow-hidden">
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100" src="{{ asset('layouts/front-end/img/about-1.jpg') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid" src="{{ asset('layouts/front-end/img/about-2.jpg') }}" style="width: 85%; margin-top: 15%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid" src="{{ asset('layouts/front-end/img/about-3.jpg') }}" style="width: 85%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-100" src="{{ asset('layouts/front-end/img/about-4.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">We Help To Get you Your Dream Job </h1>
                    <p>DreamJob is a global online employment solution for people seeking jobs and the employers who need to hire great people.  we  have expanded from our roots as a "job board" to a global provider of a full array of job seeking, career management, recruitment and talent management products and services.

                        At the heart of our success and our future is innovation: We are changing the way people think about work, and we're helping them actively improve their lives and their workforce performance with new technology, tools and practices</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection