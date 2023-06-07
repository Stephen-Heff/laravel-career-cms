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

<ul class="w3-table w3-stripped w3-bordered w3-margin-bottom " id="dashboard">
        <li class="w3-red" ><a href="/console/postings/list">Manage Postings</a></li>
        <li class="w3-blue"><a href="/console/types/list">Manage Job Types</a></li>
        <li class="w3-yellow"><a href="/console/departments/list">Manage Departments</a></li>    
        <li class="w3-brown"><a href="/console/users/list">Manage Users</a></li>
        <li class="w3-purple"><a href="/console/logout">Log Out</a></li>
    </ul>

</body>
</html>