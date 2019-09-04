@extends('layout')

@section('content')

<h1 class="title"> Create a new project </h1>

<form method="POST" action="/projects">

  {{ csrf_field() }}

  <div class="field">
    <label for="title" class="label">Title</label>

    <div class="control">
      <input type="text" name="title" class="input" placeholder="Project Title">
    </div>

  </div>

  <div class="field">
    <label for="description" class="label">Description</label>

    <div class="control">
      <textarea name="description" placeholder="Project Description" class="textarea"></textarea>
    </div>
  </div>

  <div class="fied">
    <div class="control">
      <button type="submit" class="button is-link">Create Project</button>
    </div>
  </div>

</form>

@endsection
