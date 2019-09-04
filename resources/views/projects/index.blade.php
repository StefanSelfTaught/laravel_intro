@extends('layout')

@section('content')

<h1 class="title">Projects</h1>

<ul>

  @foreach ($projects as $project)
    <li> Project id - {{ $project->id }} </li>
    <li> Project title - {{ $project->title }}</li>
    <li> Project description - {{ $project->description }}</li>
    <br />
  @endforeach

  <a href="projects/create">Create Project</a>

</ul>

@endsection
