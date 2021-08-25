<x-layout>
    <div class="container">
        <div class="col-12">
            <div class="align-items-center d-flex elements-title justify-content-between mb-80">
                <h2 class="mb-0">Recipes</h2>
                <a href="{{ route('admin.recipes.create') }}" class="btn btn-sm delicious-btn">Add New Recipe</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Date Publish</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recipes as $recipe)
                    <tr>
                        <td><a href="{{ route('recipes.show', $recipe->slug) }}">{{ $recipe->title }}</a></td>
                        <td>{{ $recipe->created_at->format('F, d Y') }}</td>
                        <td>
                            <a href="{{ route('admin.recipes.edit', $recipe->id) }}"
                                class="btn btn-link btn-sm">Edit</a>
                            <form class="d-inline" action="{{ route('admin.recipes.destroy', $recipe) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link btn-sm text-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <div class="row d-flex justify-content-center mb-4">
            {{ $recipes->links() }}
        </div>
    </div>


</x-layout>
