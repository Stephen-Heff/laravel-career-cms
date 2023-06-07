@extends ('layout.console')

@section ('content')

    <h2>Manage Users</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
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

    <a href="/console/users/add" class="w3-button w3-green">New User</a>

</section>

@endsection
