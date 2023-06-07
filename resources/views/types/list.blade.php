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

    <h2>Manage Types</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-blue">
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($types as $type): ?>
            <tr>
                <td>{{$type->title}}</td>
                <td><a href="/console/types/edit/{{$type->id}}">Edit</a></td>
                <td><a href="/console/types/delete/{{$type->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/types/add" class="w3-button w3-green">New Type</a>

</section>

</body>
</html>