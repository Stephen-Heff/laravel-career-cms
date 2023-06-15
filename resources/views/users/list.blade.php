@extends ('layout.console')

@section ('content')

<div class="w3-padding-large" style="display:flex; justify-content:space-between;align-items:center;" >
<h2>Manage Users</h2>
<div>
<a href="/console/users/add" class="w3-btn w3-round-large w3-teal">Add New User</a>
</div>
</div>

<div class="w3-responsive w3-padding">
    <table class="w3-table-all w3-hoverable w3-margin-bottom ">
        <tr class="w3-blue-gray">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Created</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($users as $user): ?>
            <tr>
                <td>{{$user->first}}</td>
                <td>{{$user->last}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->format('M j, Y')}}</td>
                <td><a href="/console/users/edit/{{$user->id}}">Edit</a></td>
                <td><a href="/console/users/delete/{{$user->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>


</section>

@endsection
