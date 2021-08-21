@props(['recipe'])
<!-- Single Best Receipe Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-best-receipe-area mb-30">
        <a href="{{ route('recipes.show', $recipe) }}">
            <img src="{{ asset('img/bg-img/r1.jpg') }}" alt="">
        </a>
        <div class="receipe-content">
            <a href="{{ route('recipes.show', $recipe) }}">
                <h5>{{ $recipe->title }}</h5>
            </a>
            <div class="ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</div>
