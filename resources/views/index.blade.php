@extends('layouts.www.master')

@section('title', 'Hiroki.com')

@section('content')

@foreach($posts as $post)
<div class="post_wrapper">
	<div>
		<a href="/{{$post->slug}}">
			<h1 class="title_header" id="title_{{$post->id}}">{{$post->title}}</h1>
		</a>
	</div>
	<h4 class="post_created_at">{{date("d M Y", strtotime($post->created_at))}}</h4>
	<div class="post_excerpt">
		<div id="body_{{$post->id}}">{!! $post->excerpt !!}</div>
	</div>
</div>
@endforeach

<div class="pagination_links">
	{{ $posts->links() }}
</div>
@endsection
