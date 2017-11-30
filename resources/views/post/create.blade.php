<!DOCTYPE =html>
<html>
	<head>
		<title>Create a post</title>
	</head>
	<body>
		<form method="POST" action="{{url('post')}}">
      {{csrf_field()}}
			<label>Post Title</label>
			<input type="text" placeholder="Title" name="title">
			<label>Post Content</label>
			<textarea rows="8" colums="80" placeholder="Type your post here" name="content"></textarea>
			<input type=submit value="Post!">
		</form>
	</body>
</html>
