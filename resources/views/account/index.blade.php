<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
	<script type="text/javascript" src="{{asset('jquery-ui/jquery-ui.js')}}"></script>
	
	<link rel="stylesheet" type="text/css" href="{{asset('jquery-ui/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('jquery-ui/jquery-ui.structure.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('jquery-ui/jquery-ui.theme.css')}}">
</head>
<body>
	<h2>List of Accounts</h2>
	<a href="{{route('account.create')}}">Create New</a>
	<br/>
	<input type="text" id="search">
	<br/>
	<br/>
	<table>
		<tr>
			<td valign="top">
				<select id="acclist">
					<option value="0">--Select an account--</option>
					@foreach($accounts as $acc)
						<option value="{{$acc->accId}}" >{{$acc->accNo}}</option>
					@endforeach
				</select>
			</td>
			<td>
				<table id="displayInfo" style="display:none;">
					<tr>
						<td>ACCOUNT NO</td>
						<td id="accno"></td>
					</tr>
					<tr>
						<td>ACCOUNT NAME</td>
						<td id="accname"></td>
					</tr>
					<tr>
						<td>BALANCE</td>
						<td id="balance"></td>
					</tr>
					<tr>
						<td>TYPE</td>
						<td id="type"></td>
					</tr>
					<tr>
						<td>LAST TRANSACTION</td>
						<td id="lasttran"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>