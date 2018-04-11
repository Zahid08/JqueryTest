<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Create New Account</h2>
	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td>ACCOUNT NO</td>
				<td><input type="text" name="accountNo" value="{{old('accountNo')}}"></td>
			</tr>
			<tr>
				<td>ACCOUNT NAME</td>
				<td><input type="text" name="accountName"></td>
			</tr>
			<tr>
				<td>INITIAL BALANCE</td>
				<td><input type="text" name="initialBalance"></td>
			</tr>
			<tr>
				<td>ACCOUNT TYPE</td>
				<td>
					<select name="accTypeId">
						@foreach($accountTypes as $type)
							<option value="{{$type->typeId}}">{{$type->typeName}}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Create"></td>
			</tr>
		</table>
	</form>
	<br/>
	@if($errors->any())
		@foreach($errors->all() as $err)
			<p>{{$err}}</p>
		@endforeach
	@endif
</body>
</html>