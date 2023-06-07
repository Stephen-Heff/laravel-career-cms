@extends ('layout.frontend', ['title' => $project->title])

@section ('content')
<section class="w3-padding">

    <h2 class="w3-text-blue">{{$posting->title}}</h2>




    @if ($posting->email)
        View Posting: <a href="{{$posting->email}}">{{$posting->email}}</a>
    @endif

    <p>
        Posted: {{$posting->created_at->format('M j, Y')}}
        <br>
        Type: {{$posting->type->title}}
        <br>
        Department: {{$posting->department->title}}
        <br>
        Job Description: {{$posting->description}}
    </p>

    <a href="/">Back to Home</a>

</section>


@endsection