<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
   <h1>This is index view</h1>
     @foreach($users as $user)
       Id: {{ $user['id'] }}
       Name: {{ $user['name'] }}<br><br>

     @endforeach

</body>
</html>