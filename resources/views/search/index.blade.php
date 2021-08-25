<x-layout>
    <x-recipe-listing heading="Search: {{ request('q') }}">
        <div class="row text-center">
            @forelse ($recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @empty
                <p>Sorry, no results were found.</p>
            @endforelse
        </div>
        <div class="row">
            {{ $recipes->links() }}
        </div>
    </x-recipe-listing>
</x-layout>
