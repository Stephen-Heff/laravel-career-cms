@extends ('layout.console')

@section ('content')
    <h2>Manage Departments</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-blue">
            <th>Department Name</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($departments as $department): ?>
            <tr>
                <td>{{$department->title}}</td>
                <td><a href="/console/departments/edit/{{$department->id}}">Edit</a></td>
                <td><a href="/console/departments/delete/{{$department->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/departments/add" class="w3-button w3-green">New Department</a>

</section>

@endsection
