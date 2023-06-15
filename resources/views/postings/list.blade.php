@extends ('layout.console')

@section ('content')

<div class="w3-padding-large" style="display:flex; justify-content:space-between;align-items:center;" >
<h2>Manage Postings</h2>
<div>
<a href="/console/postings/add" class="w3-btn w3-round-large w3-teal">Add New Posting</a>
</div>
</div>


<div class="w3-responsive w3-padding">
    <table class="w3-table-all w3-hoverable w3-margin-bottom ">
        <tr class="w3-blue-gray">
            <th>Title</th>
            <!-- <th>Slug</th> -->
            <th>Type</th>
            <th>Deadline</th>
            <th>Department</th>
            <th>Description</th>
            <th>Email</th>
            <th>Publish</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($postings as $posting)
            <tr>
                <td>{{$posting->title}}</td>
                <!-- <td>
                    <a href="/posting/{{$posting->slug}}">
                        {{$posting->slug}}
                    </a>
                </td> -->
                <td>{{$posting->type->title}}</td>
                <td>  {{\Carbon\Carbon::parse($posting->deadline)->format('Y-m-d')}}</td>
                <td>{{$posting->department->title}}</td>
                <td>{{$posting->description}}</td>
                <td>{{$posting->email}}</td>
                <td>{{$posting->publish}}</td>
         
                <td>  {{\Carbon\Carbon::parse($posting->created_at)->format('Y-m-d')}}</td>


                <td><a href="/console/postings/edit/{{$posting->id}}">Edit</a></td>
                <td><a href="/console/postings/delete/{{$posting->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

</div>

</section>

@endsection
