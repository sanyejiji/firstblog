<!-- Homepage, Index-class --> 

@extends('layouts.app')''

@section('content')

	<div class="home-intro bg-primary" id="home-intro">
		<div class="container">	
			<div class="row align-items-center">
				<div class="col-lg-8">
					<p>
						The best products you want, ALL IN <span class="highlighted-word">BestANZ</span>
						<span>New members get 20% off!</span>
					</p>
				</div>
				<div class="col-lg-4">
					<div class="get-started text-start text-lg-end">
						<a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Shop now</a>
						<div class="learn-more">or <a href="#">join loyalty programme...</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<div class="container mb-3 pb-2">	
		<div class="row text-center pt-2">
			<div class="col">
				<h2 class="word-rotator slide font-weight-bold text-8 mb-2">
					<span>We're not the only ones </span>
					<span class="word-rotator-words bg-primary">
						<b class="is-visible">present</b>
						<b>&nbsp;&nbsp;&nbsp;serve&nbsp;&nbsp;&nbsp;</b>
					</span>
					<span> ANZ products ...</span>
				</h2>
				<h4 class="text-primary lead tall text-4">HOWEVER WE GUARANTEE ALL OF THEM ARE THE BEST.</h4>
			</div>
		</div>	
		<hr class="solid my-2">
	</div>	

	<section class="section section-custom-map appear-animation lazyload" data-appear-animation="fadeInUpShorter" data-src-bg="img/map.png" style="background-color: transparent; background-position: center 0; background-repeat: no-repeat;">
		<section class="section section-default section-footer">
			<div class="container">
				<div class="row mt-5 appear-animation" data-appear-animation="fadeInUpShorter">
					<div class="col-lg-6">
						<div class="recent-posts mb-5">
							<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Latest</strong> Posts</h2>
							<div class="owl-carousel owl-theme dots-title mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'autoplay': true, 'autoplayTimeout': 8000}">
								<div class="row">
									<div class="col-lg-6 mb-4 mb-lg-0">
										<article>
											<div class="row">
												<div class="col-auto pe-0">
													<div class="date">
														<span class="day font-weight-extra-bold">15</span>
														<span class="month text-1">JAN</span>
													</div>
												</div>
												<div class="col ps-1">
													<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
													<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-lg-6">
										<article>
											<div class="row">
												<div class="col-auto pe-0">
													<div class="date">
														<span class="day font-weight-extra-bold">14</span>
														<span class="month text-1">JAN</span>
													</div>
												</div>
												<div class="col ps-1">
													<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
													<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
												</div>
											</div>
										</article>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 mb-4 mb-lg-0">
										<article>
											<div class="row">
												<div class="col-auto pe-0">
													<div class="date">
														<span class="day font-weight-extra-bold">13</span>
														<span class="month text-1">JAN</span>
													</div>
												</div>
												<div class="col ps-1">
													<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
													<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-lg-6">
										<article>
											<div class="row">
												<div class="col-auto pe-0">
													<div class="date">
														<span class="day font-weight-extra-bold">12</span>
														<span class="month text-1">JAN</span>
													</div>
												</div>
												<div class="col ps-1">
													<h4 class="text-primary text-4"><a class="d-block" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
													<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
												</div>
											</div>
										</article>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 mb-4 mb-lg-0">
										<article>
											<div class="row">
												<div class="col-auto pe-0">
													<div class="date">
														<span class="day font-weight-extra-bold">11</span>
														<span class="month text-1">JAN</span>
													</div>
												</div>
												<div class="col ps-1">
													<h4 class="text-primary text-4"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
													<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
												</div>
											</div>
										</article>
									</div>
									<div class="col-lg-6">
										<article>
											<div class="row">
												<div class="col-auto pe-0">
													<div class="date">
														<span class="day font-weight-extra-bold">10</span>
														<span class="month text-1">JAN</span>
													</div>
												</div>
												<div class="col ps-1">
													<h4 class="text-primary text-4"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur</a></h4>
													<p class="pe-4 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<a href="/" class="read-more text-color-dark font-weight-semibold text-2">read more <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">What</strong> Partner’s Say</h2>
						<div class="row">
							<div class="owl-carousel owl-theme dots-title dots-title-pos-2 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true}">
								<div>
									<div class="col">
										<div class="testimonial testimonial-primary">
											<blockquote>
												<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
											</blockquote>
											<div class="testimonial-arrow-down"></div>
											<div class="testimonial-author">
												<div class="testimonial-author-thumbnail">
													<img src="/porto/img/clients/client-1.jpg" class="rounded-circle" alt="" />
												</div>
												<p><strong>Royce Kim</strong><span>iuvovo</span></p>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="col">
										<div class="testimonial testimonial-primary">
											<blockquote>
												<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
											</blockquote>
											<div class="testimonial-arrow-down"></div>
											<div class="testimonial-author">
												<div class="testimonial-author-thumbnail">
													<img src="/porto/img/clients/client-1.jpg" class="rounded-circle" alt="" />
												</div>
												<p><strong>Eric Choi</strong><span>the Techlead</span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
		

@endsection
