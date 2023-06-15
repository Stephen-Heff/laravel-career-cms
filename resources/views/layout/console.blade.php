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
  <style>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap");

*,
*::before,
*::after {
  padding: 0;
  margin: 0;
  border: 0;
  font-size: 16px;
  font-family: "Roboto", sans-serif;

  box-sizing: border-box;
  list-style: none;
  /* text-decoration: none; */
  scroll-behavior: smooth;
}

#dashboard{
text-align: center;
display:inline-block;
padding: 0.5em;
;
}
li a{
  font-size:1.8em;
}


.header-content{
  display:flex;
  justify-content:space-between;
align-items:center;
}

.header-content a,.manage a{
  text-decoration: none;
}

input,select,textarea{
  border:0.05em solid gray;
border-radius:0.25em;
}

</style>
</head>
<body>
  
<header class="w3-padding ">
<div class="header-content w3-border-bottom">
        <h1 id="site-name">
          <a class="w3-xxlarge w3-text-gray" href="https://webuild.stephenf.ca/">WeBuild </a>
        </h1>
  <h3 class="w3-text-gray">
    Admin Dashboard
  </h3>
</div>
<div class="w3-padding">
<?php if(Auth::check()):?>
    You are logged in as <?= auth()->user()->first?><?= auth()->user()->last?>|
    <a   href="/console/logout/">Logout</a>
    <a  href="/console/dashboard/">Dashboard</a>
    <a  href="https://webuild.stephenf.ca/">Website</a>
  <?php else: ?>
    <a href="/">Return to website</a>
  <?php endif ?>
  </div>
</header>
        @if (session()->has('message'))
            <div class="w3-padding w3-margin-top w3-margin-bottom">
                <div class="w3-red w3-center w3-padding">{{session()->get('message')}}</div>
            </div>
        @endif

        @yield ('content')

    </body>
</html>