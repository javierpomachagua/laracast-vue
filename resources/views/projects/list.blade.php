<h1 class="title">My Projects</h1>
<ul>
    @foreach ($projects as $project)
        <li>{{ $project->name }}</li>
    @endforeach
</ul>
<hr>