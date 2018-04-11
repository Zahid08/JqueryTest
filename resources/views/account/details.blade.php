<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Account Details</h2>
	<a href="{{route('account.index')}}">Back to List</a> |
	<a href="{{route('account.edit', [$account->accId])}}">Edit</a> |
	<a href="{{route('account.delete', [$account->accId])}}">Delete</a>
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
			<td>TYPE</td>
			<td>{{$account->typeName}}</td>
		</tr>
		<tr>
			<td>LAST TRANSACTION</td>
			<td>{{$account->lastTransaction}}</td>
		</tr>
	</table>
</body>
</html>