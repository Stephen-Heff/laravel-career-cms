@extends('layout.console')
 
@section('content')
<div class="w3-center">
    <h1>Delete Type</h1>

    <p>Are you sure you want to delete this type?</p>

    <form method="POST" action="{{ route('types.destroy', $type->id) }}">
        @csrf
        @method('DELETE')

        <button type="submit" class="w3-btn w3-red">Delete</button>
        <a class="w3-btn w3-gray"  href="/console/types/list">Cancel</a>

    </form>
</div>
@endsection


