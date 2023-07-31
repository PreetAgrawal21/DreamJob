@extends('layouts.front-end-layouts.app')

@section('content')
<div class="container-xxl py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Job Detail</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Job Detail</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Header End -->


<!-- Job Detail Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">

                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="{{ $list->company->logo}}  " alt="" style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{ $list->job_title }}</h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $list->job_location }}</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{ $list->min_salary}} - {{ $list->max_salary}}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">Job description</h4>
                    <p>{{ $list->description }}</p>
                    {{-- <h4 class="mb-3">Responsibility</h4>
                    <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p> --}}
                    {{-- <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul> --}}
                    <h4 class="mb-3">Qualifications</h4>
                    <p>{{ $list->qualification}}</p>
                    {{-- <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul> --}}
                </div>

                <div class="">
                    <h4 class="mb-4">Apply For The Job</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Job Summery</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Publish at: {{ $list->created_at}}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: {{ $list->vacancy_count}}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Job Type: Full Time</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: {{ $list->min_salary}} - {{ $list->max_salary}} INR</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Location: {{ $list->job_location}}</p>
                    {{-- <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 01 Jan, 2045</p> --}}
                </div>
                <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Company Detail</h4>
                    <p class="m-0">{{ $list->company->title}}</p>
                    <p class="m-0">{{ $list->company->decription}}</p>
                    <p class="m-0">{{ $list->company->website}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job Detail End -->
@endsection
