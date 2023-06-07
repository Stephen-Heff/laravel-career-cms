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

        <hr>

        @if (session()->has('message'))
            <div class="w3-padding w3-margin-top w3-margin-bottom">
                <div class="w3-red w3-center w3-padding">{{session()->get('message')}}</div>
            </div>
        @endif

        @yield ('content')

    </body>
</html>