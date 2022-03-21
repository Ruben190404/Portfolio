<x-guest-layout>
    <section>
        @foreach($projects AS $project)
            <div>
                <img src="images/projectsHP/{{$project->picture}}">
                <div>
                    {{$project->title}}
                </div>
                <div>
                    {{$project->description}}
                </div>
            </div>
        @endforeach
    </section>
</x-guest-layout>
