<x-layout>
    <x-recipe-listing heading="Search: {{ request('q') }}">
        <div class="row">
            @foreach ($recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @endforeach
        </div>
        <div class="row">
            {{ $recipes->links() }}
        </div>
    </x-recipe-listing>
</x-layout>
