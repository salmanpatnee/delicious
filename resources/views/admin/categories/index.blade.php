<x-layout>
    <div class="container">
        <div class="col-12">
            <div class="align-items-center d-flex elements-title justify-content-between mb-80">
                <h2 class="mb-0">Categories</h2>
                <a href="{{ route('admin.categories.create') }}" class="btn btn-sm delicious-btn">Add New Category</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Recipes Count</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td><a href="{{ route('categories.index', $category->slug) }}">{{ $category->name }}</a>
                        </td>
                        <td>{{ $category->recipes_count }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                                class="btn btn-link btn-sm">Edit</a>
                            <form class="d-inline" action="{{ route('admin.categories.destroy', $category) }}"
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
            {{ $categories->links() }}
        </div>
    </div>


</x-layout>
