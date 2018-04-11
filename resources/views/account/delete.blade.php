<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Delete Confirmation</h2>
	<a href="{{route('account.show', $account->accId)}}">Back</a>
	<br/><br/>
	<table>
		<tr>
			<td>ACCOUNT NO</td>
			<td>{{$account->accNo}}</td>
		</tr>
		<tr>
			<td>ACCOUNT NAME</td>
			<td>{{$account->accName}}</td>
		</tr>
		<tr>
			<td>BALANCE</td>
			<td>{{$account->balance}}</td>
		</tr>
		<tr>
			<td>LAST TRANSACTION</td>
			<td>{{$account->lastTransaction}}</td>
		</tr>
	</table>
	<h4>Are you sure? This cannot be undone.</h4>
	<form method="post">
		{{csrf_field()}}
		<input type="hidden" name="accountId" value="{{$account->accId}}">
		<input type="submit" value="Confirm">
	</form>
</body>
</html>