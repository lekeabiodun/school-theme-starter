@extends(theme_layout('eclipse'))

@section('content')

	<div class="blog">
		<div class="container">
			<div class="row">
				<!-- Blog Content -->
				<div class="col-lg-8">
                    <div class="course">
                        <div class="course_image"><img src="{{ asset($post->image) }}" alt=""></div>
                        <div class="course_body">
                            <h3 class="course_title" style="height: 50px"><a href="/{{$post->slug}}">{{ $post->title }}</a></h3>
                            <hr>
                            <div class="course_text">
                                <p>{{ $post->body }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection