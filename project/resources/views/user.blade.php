<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户的添加</title>
</head>
<body>
	<form action="/test/insert" method="post">
		用户名:<input type="text" name="username" value="{{old('username')}}"><br>
		密码:<input type="password" name="password" value="{{old('password')}}"><br>
		昵称:<input type="text" name="nickname" value="{{old('nickname')}}"><br>
		简介:<input type="text" name="intro" value="{{old('intro')}}"><br>
		{{csrf_field()}}
		<input type="submit" value="点击提交">
	</form>
</body>
</html>