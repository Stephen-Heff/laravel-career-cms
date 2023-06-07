@extends ('layout.console')

@section ('content')
    <h2>Manage Postings</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Slug</th>
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
                <td>
                    <a href="/posting/{{$posting->slug}}">
                        {{$posting->slug}}
                    </a>
                </td>
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

    <a href="/console/postings/add" class="w3-button w3-green">New Posting</a>

</section>

@endsection
