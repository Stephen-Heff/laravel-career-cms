@extends('layout.console')
 
@section('content')
<div class="w3-center">
    <h1>Delete User</h1>

    <p>Are you sure you want to delete this user?</p>

    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
        @csrf
        @method('DELETE')

        <button user="submit" class="w3-btn w3-red">Delete</button>
        <a class="w3-btn w3-gray"  href="/console/users/list">Cancel</a>

    </form>
</div>
@endsection


