@extends('layout')

@section('title', 'Edit Project')

@section('content')

    <h1 class="title">Edit Project</h1>

    <form action="/projects/{{ $project->id }}" method="POST">

      {{ method_field('PATCH') }}

      {{ csrf_field() }}

      <div class="field">
        <label for="title" class="label">Title</label>

        <div class="control">
          <input type="text" name="title" class="input" placeholder="title" value="{{ $project->title }}">
        </div>

      </div>

      <div class="field">
        <label for="description" class="label">Description</label>

        <div class="control">
          <textarea name="description" class="textarea">{{ $project->description }}</textarea>
        </div>
      </div>

      <div class="fied">
        <div class="control">
          <button type="submit" class="button is-link">Update Project</button>
        </div>
      </div>

    </form>

    <form style="margin-top: 15px" method="POST" action="/projects/{{ $project->id }}">

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <div class="fied">
            <div class="control">
              <button type="submit" class="button">Delete Project</button>
            </div>
          </div>
    </form>

@endsection