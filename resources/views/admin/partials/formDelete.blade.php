<form class="d-inline" action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare il progetto {{$project->title}}?')">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">
        <i class="fa-solid fa-trash"></i>
    </button>
</form>
