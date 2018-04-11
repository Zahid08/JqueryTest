<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Edit Account</h2>
	<a href="{{route('account.show', [$account->accId])}}">Back</a>
	<br/><br/>
	<form method="post">
		{{csrf_field()}}
		<input type="hidden" name="accountId" value="{{$account->accId}}">
		<table>
			<tr>
				<td>ACCOUNT NO</td>
				<td>{{$account->accNo}}</td>
			</tr>
			<tr>
				<td>ACCOUNT NAME</td>
				<td><input type="text" name="accountName" value="{{$account->accName}}"></td>
			</tr>
			<tr>
				<td>BALANCE</td>
				<td>{{$account->balance}}</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>