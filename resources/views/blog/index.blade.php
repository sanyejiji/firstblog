<!-- Blog.Index --> 

@extends('layouts.app')

@section('content')

	<div role="main" class="main">
		<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
			<div class="container">
				<div class="row">					
					<div class="col-md-12 align-self-center order-1">
						<ul class="breadcrumb d-block text-center">
							<li><a href="/home">Home</a></li>
							<li class="active">Blog</li>
						</ul>
					</div>
					<!--					
					<div class="col-md-12 align-self-center p-static order-2 text-center">
						<h1 class="text-dark font-weight-bold text-8">Welcome to my Blog!</h1>
						<span class="sub-title text-dark">Laravel practice ...</span>
					</div>
					-->

					@if (Auth::check())	
					<div class="col-md-12 align-self-center order-3">
						<ul class="breadcrumb d-block text-center">
							<li>
								<a href="/blog/create"
									class="font-weight-semibold pt-4 pt-lg-0 text-8 line-height-4 mb-2 algn-self-right">
									<u>Create Post</u>
								</a>
							</li>
						</ul>
					</div>
					@endif

					@if (session()->has('message'))
					<div class="col-md-12 align-self-center p-static order-4 text-center">
						<p class="sub-title text-dark">
						{{ session()->get('message') }}
						</p>
					</div>
					@endif
				</div>
			</div>
		</section>

		<div class="container py-4">
			<div class="row">
				<div class="col-lg-9">
					<div class="blog-posts">

						@foreach($posts as $post )
									
							<article class="post post-medium">
								<div class="row mb-3">
									<div class="col-lg-5">
										<div class="post-image">
											<div class="owl-carousel owl-theme show-nav-hover dots-inside nav-inside nav-style-1 nav-light mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': true}">
												<div>
													<div class="img-thumbnail border-0 p-0 d-block">
														<img class="img-fluid border-radius-0" src="{{ asset('images/' . $post->image_path) }}" alt="">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="post-content">
											<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="#">{{$post->title}}</a></h2>
											<p class="mb-0">{{$post->description }}</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="post-meta">
											<span><i class="far fa-calendar-alt"></i> {{ date('jS M Y', strtotime($post->updated_at))}}</span>
											<span><i class="far fa-user"></i> By <a href="#">{{$post->user->name }}</a> </span>
											<span class="d-block d-sm-inline-block float-sm-end mt-1 mt-sm-0">
												<a href="/blog/{{ $post->slug }}" class="btn btn-xs btn-light text-1 text-uppercase">
													Read More
												</a>
											</span>

										@if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
											<span class="d-block d-sm-inline-block float-sm-end mt-2 mt-sm-0">
												<a href="/blog/{{ $post->slug }}/edit" class="btn btn-xs btn-light text-1 text-uppercase">
													Edit
												</a>
											</span>											
											<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0">
												<form action="/blog/{{$post->slug}}" method="POST">
													@csrf 
													@method('delete')
													<button class ="btn btn-xs btn-light text-1 text-uppercase" type="submit">
														Delete
													</button>
												</form>
											</span>

										@endif
										</div>
									</div>
								</div>
							</article>

						@endforeach
					</div>
				</div>
			</div>
		</div>

	</div>

@endsection
