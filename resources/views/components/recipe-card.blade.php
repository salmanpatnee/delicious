@props(['recipe'])
<!-- Single Best Receipe Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-best-receipe-area mb-30">
        <a href="{{ route('recipes.show', $recipe) }}">
            <img src="{{ $recipe->getThumbnail() }}" alt="">
        </a>
        <div class="receipe-content">
            <a href="{{ route('recipes.show', $recipe) }}">
                <h5>{{ $recipe->title }}</h5>
            </a>
            <div class="d-flex justify-content-center">
                <span>Posted in: <a
                        href="{{ route('categories.index', $recipe->category->slug) }}">{{ $recipe->category->name }}</a></span>
            </div>

            <div class="ratings">
                <a href="{{ route('recipes.show', $recipe) }}" class="btn btn-xs delicious-btn">See Recipe</a>
            </div>
        </div>
    </div>
</div>
