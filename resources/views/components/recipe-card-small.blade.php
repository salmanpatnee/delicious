@props(['recipe'])
<!-- Small Receipe Area -->
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-small-receipe-area d-flex">
        <!-- Receipe Thumb -->
        <div class="receipe-thumb">
            <a href="{{ route('recipes.show', $recipe) }}">
                <img src="img/bg-img/sr1.jpg" alt="">
            </a>
        </div>
        <!-- Receipe Content -->
        <div class="receipe-content">
            <span>{{ $recipe->created_at->format('M d, Y') }}</span>
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
            <p>2 Comments</p>
        </div>
    </div>
</div>
