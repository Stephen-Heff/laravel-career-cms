<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" >
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
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
padding: 0.5em;
display:inline-block;



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
</header>
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
<ul class="w3-table w3-stripped w3-bordered w3-margin-bottom " id="dashboard">
        <li class="manage w3-hover-blue-gray w3-border-bottom w3-round-large " ><a href="/console/postings/list">Manage Postings</a></li>
        <li class="manage w3-light-gray w3-hover-blue-gray w3-border-bottom w3-round-large "><a href="/console/types/list">Manage Job Types</a></li>
        <li class="manage w3-gray w3-hover-blue-gray w3-border-bottom w3-round-large"><a href="/console/departments/list">Manage Departments</a></li>    
        <li class="manage w3-dark-gray w3-hover-blue-gray w3-border-bottom w3-round-large "><a href="/console/users/list">Manage Users</a></li>
        <li class="manage w3-black w3-hover-red w3-round-large" style="margin-top: 5em;"><a href="/console/logout">Log Out</a></li>
    </ul>

</body>
</html>