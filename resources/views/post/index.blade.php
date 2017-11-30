@foreach($posts as $post)
	<a href="/post/{{$post['id']}}">{{$post['title']}}</a>
	<br>
	{{$post['content']}}
	<br>
	<br>
@endforeach
