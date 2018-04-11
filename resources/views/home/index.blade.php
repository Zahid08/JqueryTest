<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	
	<h2>Welcome home</h2>
	<a href="{{route('account.index')}}">Accounts</a> |
	<a href="{{route('logout.index')}}">Logout</a>
	<!--
	form action="{{route('logout.index')}}" method="post">
		<input type="submit" value="Logout">
	</form>
	-->
	<a href="{{asset('uploads')}}/Book1.xlsx">Download</a>
</body>
</html>






