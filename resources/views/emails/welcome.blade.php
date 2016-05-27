
<html>
<head>
</head>
<body>
    <h2>Welcome to EMR</h2>
    <div>Hi {{$user->name}}, you have been registered as a {{$user->role}} in our organization</div>
    Click here to reset your password: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
</body>
</html>