<!-- Sidebar Menu -->
<nav class="mt-2">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
		data-accordion="false">
		<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
		<li class="nav-item">

				<li class="nav-item ">
					<a href="{{ route('dashboard') }}" class="nav-link ">

						@if($icons)
							<i class="nav-icon fa fa-tachometer"></i>
						@endif

						<p>{{ __('Dashboard') }}</p>
					</a>
				</li>

				{{-- @can('users.index')
					<li class="nav-item">
						<a href="{{ route('users.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fa fa-users"></i>
							@endif

							<p>{{ __('Users') }}</p>
						</a>
					</li>
				@endcan --}}
			
					
				 

				
					<li class="nav-item">
						<a href="{{ route('users.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fa fa-user"></i>
							@endif

							<p>{{ __('Users') }}</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('jobs.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fa fa-suitcase"></i>
							@endif

							<p>{{ __('jobs') }}</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('contact-us.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fa fa-phone"></i>
							@endif

							<p>{{ __('Contact us') }}</p>
						</a>
					</li>
				

				@can('reviews.index')
					<li class="nav-item">
						<a href="{{ route('reviews.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fa fa-star"></i>
							@endif

							<p>{{ __('Reviews') }}</p>
						</a>
					</li>
				@endcan

				{{-- @can('frontend_images.index')
					<li class="nav-item">
						<a href="{{ route('frontend_images.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fa fa-image"></i>
							@endif

							<p>{{ __('Images') }}</p>
						</a>
					</li>
				@endcan

				@can('events.index')
					<li class="nav-item">
						<a href="{{ route('events.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fa fa-shield"></i>
							@endif

							<p>{{ __('Events') }}</p>
						</a>
					</li>
				@endcan --}}

				@can('roles.index')
					<li class="nav-item">
						<a href="{{ route('roles.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fa fa-tasks"></i>
							@endif

							<p>{{ __('Roles') }}</p>
						</a>
					</li>
				@endcan

				@can('permissions.index')
					<li class="nav-item">
						<a href="{{ route('permissions.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fas fa-user-shield"></i>
							@endif

							<p>{{ __('Permissions') }}</p>
						</a>
					</li>
				@endcan

				@can('emailtemplates.index')
					<li class="nav-item">
						<a href="{{ route('emailtemplates.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fa fa-envelope"></i>
							@endif

							<p>{{ __('Email Templates') }}</p>
						</a>
					</li>
				@endcan

				@can('contacts.index')
					<li class="nav-item">
						<a href="{{ route('contacts.index') }}" class="nav-link">

							@if($icons)
								<i class="nav-icon fas fa-address-card"></i>
							@endif

							<p>{{ __('Contact Us') }}</p>
						</a>
					</li>
				@endcan

		</li>
	</ul>
</nav>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- /.sidebar-menu -->
