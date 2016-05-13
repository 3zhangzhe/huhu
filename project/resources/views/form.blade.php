<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>这是一个form</title>
</head>
<body>
	<form action="http://www.zhangzhe.com/test" method="post">
		<input type="text" name="name">
		{{csrf_field()}}
		<input type="submit" value="提交">
	</form>
</body>
</html>