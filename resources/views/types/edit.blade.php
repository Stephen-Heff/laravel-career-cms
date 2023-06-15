@extends ('layout.console')

@section ('content')
<section class="w3-padding">

    <h2>Edit Type</h2>

    <form method="post" action="/console/types/edit/{{$type->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Name:</label>
            <input type="text" name="title" id="title" value="{{old('title', $type->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-btn w3-teal w3-round-large">Edit Type</button>

    </form>

    <a href="/console/types/list">Back to Type List</a>

</section>
@endsection