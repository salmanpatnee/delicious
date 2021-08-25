<x-layout>

    <!-- ##### Best Receipe Area Start ##### -->
    <section class="best-receipe-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>All Recipes</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($recipes as $recipe)
                    <x-recipe-card :recipe="$recipe" />
                @endforeach
            </div>
            <div class="row d-flex justify-content-center">
                {{ $recipes->links() }}
            </div>
        </div>
        </div>
    </section>
    <!-- ##### Best Receipe Area End ##### -->
</x-layout>
