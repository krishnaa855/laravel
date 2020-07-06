<meta name="csrf-token" content="{{ csrf_token() }}">
<form method="POST" action="{{url('set')}}">

name:<input type="text" name="name">
@csrf
<br>
<br>
address:<input type="text" name="add"><br>
<br>

<button type="submit">Submit</button>
</form>