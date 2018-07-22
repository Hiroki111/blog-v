@extends('layouts.www.master')

@section('title', env('APP_NAME'))

@section('content')

@foreach($posts as $post)
<div class="post_wrapper">
	<div>
		<a href="/{{$post->slug}}">
			<h1 class="title_header" id="title_{{$post->id}}">{{$post->title}}</h1>
		</a>
	</div>
	<h4 class="post_created_at">
		<i class="fa fa-clock-o"></i> {{date("d M Y", strtotime($post->created_at))}}
		@if(!empty($post->category->name))
			<i style="margin-left: 20px;" class="fa fa-file-text"></i> {{$post->category->name}}
		@endif
	</h4>
	<div class="post_excerpt">
		<div id="body_{{$post->id}}">
			<p>{!! $post->excerpt !!}</p>
		</div>
		<a href="/{{$post->slug}}" class="btn continue_reading_btn" role="button">Continue Reading</a>
	</div>
</div>
@endforeach

@if(count($posts) === 0)
<div>
	<h1>No Article Found</h1>
</div>
@endif

<div class="pagination_links">
	{{ $posts->links() }}
</div>
@endsection
