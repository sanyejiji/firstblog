<!-- Blog.Show --> 

@extends('layouts.app')

@section('content')

    <div role="main" class="main">

		<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
			<div class="container">
				<div class="row">					
					<div class="col-md-12 align-self-center order-1">
						<ul class="breadcrumb d-block text-center">
							<li><a href="/home">Home</a></li>
							<li><a href="/blog">Blog</a></li>
						</ul>
					</div>
                </div>
            </div>
        </section>


        <div class="container py-4">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-posts single-post">
                        <article class="post post-large blog-single-post border-0 m-0 p-0">
                            <div class="post-image ms-0">
                                <a href="#">
                                    <img src="{{asset('images/' . $post->image_path) }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                </a>
                            </div>
                            <div class="post-date ms-0">
                                <span class="day">{{date('jS', strtotime($post->updated_at))}}</span>
                                <span class="month">{{date('M', strtotime($post->updated_at))}}</span>
                            </div>
                            <div class="post-content ms-0
                                <h2 class="font-weight-semi-bold"><a href="#">{{$post->title}}</a></h>
                                <div class="post-meta">
                                    <span><i class="far fa-calendar-alt"></i> {{ date('jS M Y', strtotime($post->updated_at))}}</span>
                                    <span><i class="far fa-user"></i> By <a href="#">{{$post->user->name}}</a> </span>
                                    <!--span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                    <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span -->
                                </div>
                                <p>{{$post->description}}</
                                <div class="post-block mt-5 post-share">
                                    <h4 class="mb-3">Share this Post</h
                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                    <div class="addthis_inline_share_toolbox"></div>
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ba220dbab331b0"></scrip
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

