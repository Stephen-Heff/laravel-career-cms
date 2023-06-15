@extends ('layout.console')

@section ('content')

<div class="w3-padding-large" style="display:flex; justify-content:space-between;align-items:center;" >
<h2>Manage Postings</h2>
<div>
<a href="/console/types/add" class="w3-btn w3-round-large w3-teal">Add New Type</a>

</div>
</div>
  <div class="w3-responsive w3-padding">
    <table class="w3-table-all w3-hoverable w3-margin-bottom ">
        <tr class="w3-blue-gray">
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
  </div>

</section>

@endsection