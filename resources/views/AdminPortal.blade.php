@extends('layouts.app')

@section('content')
<table class="table" style="width:100%">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Suspend</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
        	<form action="manageUser" method="post">
        		{{csrf_field()}}
        		<td>{{$user->getUsername()}}<input type="hidden" id="name" name="name" value="{{$user->getUsername()}}"></td>
        		<td>{{$user->getEmail()}}<input type="hidden" id="email" name="email" value="{{$user->getUsername()}}">
        			<input type="hidden" id="password" name="password" value="{{$user->getPassword()}}">
        		</td>
        		<td><button id="suspend_button" name="suspend_button" type="submit">Suspend</button></td>
        		<td><button id="delete_button" name="delete_button" type="submit">Delete</button></td>
        	</form>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection