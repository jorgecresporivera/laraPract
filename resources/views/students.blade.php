        @extends('layouts.master')
        @section('content')
            @foreach($students as $stud)
             <h1>{{$stud->name}}</h1>
            @endforeach
        @endsection