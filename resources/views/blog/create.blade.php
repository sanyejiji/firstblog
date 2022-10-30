<!-- Blog.Create -->

@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col">
            <div class="blog-posts single-post">
                <article class="post post-large blog-single-post border-0 m-0 p-0">
                    <div class="post-image ms-0">
                        <div class="post-block mt-5 post-leave-comment">
                            <h4 class="mb-3">Create a new post
                            <form class="contact-form p-4 rounded bg-color-grey" 
                                action="/blog" 
                                method="POST" 
                                enctype="multipart/form-data">
                                @csrf		

                                <div class="p-2">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label class="form-label required font-weight-bold text-dark">Title</label>
                                            <input type="text" value="" data-msg-required="Please enter title." maxlength="100" class="form-control" name="title" required>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="form-label required font-weight-bold text-dark">Choose Image</label>
                                            <input type="file" name="image" maxlength="100" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label class="form-label required font-weight-bold text-dark">Content</label>
                                            <textarea maxlength="5000" data-msg-required="Please enter your content." rows="8" class="form-control" name="description" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col mb-0">
                                            <input type="submit" value="Submit Post" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                     </div>
                </article>
            </div>
        </div>
    </div>
</div>


@endsection

