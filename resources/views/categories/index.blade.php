<x-layout>
    <x-recipe-listing heading="Category: {{ $category->name }}">
        <div class="row">
            @forelse ($recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @empty
                <p class="text-center">No recipes found in this category.</p>
            @endforelse
        </div>
        <div class="row">
            {{ $recipes->links() }}
        </div>
    </x-recipe-listing>
</x-layout>
