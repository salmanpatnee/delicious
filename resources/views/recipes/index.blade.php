<x-layout>

    @include('partials.slider')

    <!-- ##### Best Receipe Area Start ##### -->
    <section class="best-receipe-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>The Best Recipes</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($bestRecipes as $recipe)
                    <x-recipe-card :recipe="$recipe" />
                @endforeach

            </div>
        </div>
    </section>
    <!-- ##### Best Receipe Area End ##### -->

    @include('partials.cta')

    <!-- ##### Small Receipe Area Start ##### -->
    <section class="small-receipe-area section-padding-80-0">
        <div class="container">
            <div class="row">
                @foreach ($recipes as $recipe)
                    <x-recipe-card-small :recipe="$recipe" />
                @endforeach

            </div>
        </div>
    </section>
    <!-- ##### Small Receipe Area End ##### -->

    <!-- ##### Quote Subscribe Area Start ##### -->
    <section class="quote-subscribe-adds">
        <div class="container">
            <div class="row align-items-end">
                <!-- Quote -->
                <div class="col-12 col-lg-12">
                    <div class="quote-area text-center">
                        <span>"</span>
                        <h4>Nothing is better than going home to family and eating good food and relaxing</h4>
                        <p>John Smith</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Quote Subscribe Area End ##### -->
</x-layout>
