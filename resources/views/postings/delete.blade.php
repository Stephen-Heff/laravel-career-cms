@extends('layout.console')
 
@section('content')
<div class="w3-center">
    <h1>Delete Posting</h1>

    <p>Are you sure you want to delete this posting?</p>

    <form method="POST" action="{{ route('postings.destroy', $posting->id) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="w3-btn w3-red">Delete</button>
        <a class="w3-btn w3-gray"  href="/console/postings/list">Cancel</a>

    </form>
</div>
@endsection


