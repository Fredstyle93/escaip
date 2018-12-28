@extends('layouts.app')

@section('main')
<ul>
    
    @foreach ($projects as $project)
        <li>$project->title</li>
    @endforeach

</ul>
    
@endsection

