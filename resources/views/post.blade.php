@extends('layouts.www.master')

@section('title', 'Hiroki.com - '.$post->title)

@section('content')

<div>
	<h1 class="title_header">{{$post->title}}</h1>
</div>
<h4 class="post_created_at">
		<i class="fa fa-clock-o"></i> {{date("d M Y", strtotime($post->created_at))}}
		@if(!empty($post->category->name))
			<i style="margin-left: 20px;" class="fa fa-file-text"></i> {{$post->category->name}}
		@endif
	</h4>
<div >
	<div>{!! $post->body !!}</div>
</div>
<div class="link_next_prev">
	@if(!empty($next))
	<div>
		<p>Next : <a href="/{{ $next->slug }}">{{ $next->title }}</a></p>
	</div>
	@endif
	@if(!empty($prev))
	<div >
		<p>Previous : <a href="/{{ $prev->slug }}">{{ $prev->title }}</a></p>
	</div>
	@endif
</div>
<div id="disqus_thread"></div>
<script>
	var disqus_config = function () {
this.page.url = "{{env('APP_URL').'/'.$post->slug}}";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "{{env('APP_URL').'/'.$post->id}}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://hiroki-com.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


@endsection
