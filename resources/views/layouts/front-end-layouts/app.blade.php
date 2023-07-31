<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dream job</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

 <!-- Google Web Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

 <!-- Icon Font Stylesheet -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

 <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
 <!-- Libraries Stylesheet -->
 <link href="{{ asset('layouts/front-end/lib/animate/animate.min.css') }}" rel="stylesheet">
 <link href="{{ asset('layouts/front-end/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">


 <!-- Customized Bootstrap Stylesheet -->
 <link href="{{ asset('layouts/front-end/css/bootstrap.min.css') }}" rel="stylesheet">

 <!-- Template Stylesheet -->
 <link href="{{ asset('layouts/front-end/css/style.css') }}" rel="stylesheet">
</head>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">DreamJob</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('about_us') }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('job_list') }}" class="nav-item nav-link">Jobs</a>

                    <a href="{{ route('contact_us') }}" class="nav-item nav-link">Contact</a>
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-sm-4  col-md-6">
                        <h5 class="text-white mb-4">About company</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>hello there how are you</p>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-6">
                        <h5 class="text-white mb-4 mb-3">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="{{ route('about_us') }}">About Us</a>
                        <a class="btn btn-link text-white-50" href="{{ route('contact_us') }}">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-6">
                        <h5 class="text-white mb-4 mb-3">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 col-sm-4 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">DreamJob</a>, All Right Reserved.
							Developed by:- Preet,Hemangi,Khushi
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('layouts/front-end/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('layouts/front-end/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('layouts/front-end/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('layouts/front-end/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('layouts/front-end/js/main.js') }}"></script>

     <!-- Scripts -->
	<script src="{{ asset('js/bootstrap.js.map') }}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>
    {{-- <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        src="{{ route('searchjobsajax') }}"
        $(document).ready(function(){
            $( "#search_text" ).autocomplete({
                source: function(request , response){
                    $.ajax({
                        url:src,
                        data:{
                            term :request.term
                        },
                        datatype:'json',
                        success:function(data) {
                            response(data);
                        }
                    })
                },
                minlength: 1,
             });

             $(document).on('click','ui-menu-item', function(){
                  $('search-form').submit();
             });
        });

    </script> --}}
    {{-- <script type="text/javascript">
        $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
        type : 'get',
        url : '{{URL::to('search')}}',
        data:{'search':$value},
        success:function(data){
        $('tbody').html(data);
        }
        });
        })
        </script>
        <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script> --}}

	<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
	<script>
	@if(Session::has('message'))
		var type = "{{ Session::get('alert-type', 'info') }}";
		switch(type){
				case 'info':
					toastr.info("{{ Session::get('message') }}");
					break;

				case 'warning':
					toastr.warning("{{ Session::get('message') }}");
					break;

				case 'success':
					toastr.success("{{ Session::get('message') }}");
					break;

				case 'error':
					toastr.error("{{ Session::get('message') }}");
					break;
		}
	@endif
	</script>

	<!-- jQuery -->
	{{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
	<!-- Bootstrap -->



	<script src="{{ asset("js/app.js") }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>


	<script>
		$(document).ready(function(){
			$("body").tooltip({ selector:'[data-toggle=tooltip]',placement:'top'});

		});
	</script>


	@yield('js')
</body>
</html>
