<h1> Projects </h1>

<ul>

  @foreach ($projects as $project)
    <li>Projects Id: {{ $project->id }}</li>
    <li>Project Title: {{ $project->title }}</li>
    <li>Project description: {{ $project->description }}</li>
    <br />
  @endforeach

</ul>