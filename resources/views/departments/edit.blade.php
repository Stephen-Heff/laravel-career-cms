@extends ('layout.console')

@section ('content')
<section class="w3-padding">

    <h2>Edit Department</h2>

    <form method="post" action="/console/departments/edit/{{$department->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Department Name:</label>
            <input type="text" name="title" id="title" value="{{old('title', $department->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Department</button>

    </form>

    <a href="/console/departments/list">Back to Department List</a>

</section>

@endsection