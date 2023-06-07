<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- <link rel="stylesheet" href="/app.css">
  <script src="/app.js"></script> -->
</head>
<body>
  
<header class="w3-padding">
  <h1>
    Admin Dashboard
  </h1>

  <?php if(Auth::check()):?>
    You are logged in as <?= auth()->user()->first?><?= auth()->user()->last?>|
    <a href="/console/logout/">Logout</a>
    <a href="/console/dashboard/">Dashboard</a>
    <a href="/">Website</a>
  <?php else: ?>
    <a href="/">Return to website</a>
  <?php endif ?>
</header>



<form method="post" action="/console/login" novalidate>

@csrf

<div class="w3-margin-bottom">
    <label for="email">Email Address:</label>
    <input type="email" name="email" id="email" value="{{old('email')}}" required>
    
    @if ($errors->first('email'))
        <br>
        <span class="w3-text-red">{{$errors->first('email')}}</span>
    @endif
</div>

<div class="w3-margin-bottom">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    @if ($errors->first('password'))
        <br>
        <span class="w3-text-red">{{$errors->first('password')}}</span>
    @endif
</div>

<button type="submit">Log In</button>

</form>


</body>
</html>