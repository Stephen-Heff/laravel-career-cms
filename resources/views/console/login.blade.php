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

form{
margin-top:7%;
 margin-left:40%;
 margin-right: 40%; 
  display:inline-block;
  padding:3em;
}

input,select,textarea{
  border:0.05em solid gray;
border-radius:0.25em;
}

.rtw{
  padding-top:0.5em;
}
</style>
</head>
<body>
  
<header class="w3-padding w3-border-bottom">
<div class="header-content">
        <h1 id="site-name">
          <a class="w3-xxlarge w3-text-gray" href="https://webuild.stephenf.ca/">WeBuild </a>
        </h1>
  <h3 class="w3-text-gray">
    Admin Dashboard
  </h3>

  <?php if(Auth::check()):?>
    You are logged in as <?= auth()->user()->first?><?= auth()->user()->last?>|
    <a href="/console/logout/">Logout</a>
    <a href="/console/dashboard/">Dashboard</a>
    <a href="/">Website</a>
  <?php else: ?>
   
  <?php endif ?>
  
</header>



<form class="w3-card " method="post" action="/console/login" novalidate>

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

<button class="w3-button w3-teal" type="submit">Log In</button>
<div class=" rtw w3-left-align  "><a  href="https://webuild.stephenf.ca/">Return to website</a></div>
 </div>
</form>


</body>
</html>