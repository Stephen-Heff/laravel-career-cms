@extends ('layout.console')

@section ('content')
<section class="w3-padding">

    <h2>Edit Posting</h2>

    <form method="post" action="/console/postings/edit/{{$posting->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title', $posting->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug" value="{{old('slug', $posting->slug)}}" required>

            @if ($errors->first('slug'))
                <br>
                <span class="w3-text-red">{{$errors->first('slug')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="type_id">Type:</label>
            <select name="type_id" id="type_id">
                <option></option>
                @foreach($types as $type)
                    <option value="{{$type->id}}"
                        {{$type->id == old('type_id', $posting->type_id) ? 'selected' : ''}}>
                        {{$type->title}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('type_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('type_id')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="deadline">Deadline:</label>
            <input type="date" name="deadline" id="deadline" value="{{old('deadline', \Carbon\Carbon::parse($posting->deadline)->format('Y-m-d'))}}"">

            @if ($errors->first('deadline'))
                <br>
                <span class="w3-text-red">{{$errors->first('deadline')}}</span>
            @endif
        </div>

        
        <div class="w3-margin-bottom">
            <label for="department_id">Department:</label>
            <select name="department_id" id="department_id">
                <option></option>
                @foreach($departments as $department)
                    <option value="{{$department->id}}"
                        {{$department->id == old('department_id', $posting->department_id) ? 'selected' : ''}}>
                        {{$department->title}}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('department_id'))
                <br>
                <span class="w3-text-red">{{$errors->first('department_id')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">Job Description:</label>
            <textarea name="description" id="description" required>{{old('description', $posting->description)}}</textarea>

            @if ($errors->first('description'))
                <br>
                <span class="w3-text-red">{{$errors->first('description')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{old('email', $posting->email)}}" required>
            
            @if ($errors->first('email'))
                <br>
                <span class="w3-text-red">{{$errors->first('email')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="publish">Publish:</label>
            <input type="publish" name="publish" id="publish" value="{{old('publish', $posting->publish)}}" required>
            
            @if ($errors->first('publish'))
                <br>
                <span class="w3-text-red">{{$errors->first('publish')}}</span>
            @endif
        </div>
  

        <button type="submit" class="w3-button w3-green">Edit Posting</button>

    </form>

    <a href="/console/postings/list">Back to Posting List</a>

</section>
@endsection
