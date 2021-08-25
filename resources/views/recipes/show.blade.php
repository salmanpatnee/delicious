<x-layout>
    @section('styles')
        <style>
            .single-preparation-step h4 {
                color: #474747;
                -webkit-box-flex: 0;
                -ms-flex: 0 0 60px;
                flex: 0 0 60px;
                max-width: initial;
                width: auto;
                margin-bottom: 20px;
            }

            .comment {
                background-color: #F3F4F6;
                border-radius: 15px;
                border: 1px solid rgba(229, 231, 235, 1);
            }

            .contact-form-area textarea.form-control {
                height: 100px;
            }

        </style>
    @endsection
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay"
        style="background-image: url({{ asset('img/bg-img/header-bg.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>{{ $recipe->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="receipe-post-area section-padding-80">

        <!-- Receipe Post Search -->
        <div class="receipe-post-search mb-80">
            <div class="container">
                <form action="/search">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <select name="select1" id="select1">
                                <option value="/">All Categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{ route('categories.index', $category->slug) }}">
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <form action="/search">
                            <div class="col-12 col-lg-3">
                                <input type="search" name="q" placeholder="Search Recipes">
                            </div>
                            <div class="col-12 col-lg-3 text-right">
                                <button type="submit" class="btn delicious-btn">Search</button>
                            </div>
                        </form>

                    </div>
                </form>
            </div>
        </div>

        <!-- Receipe Slider -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="receipe-slider owl-carousel">
                        <img src="{{ $recipe->getThumbnail('banner') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Receipe Content Area -->
        <div class="receipe-content-area">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="receipe-headline my-5">
                            <span>{{ $recipe->created_at->format('M d, Y') }}</span>
                            <h2>{{ $recipe->title }}</h2>
                            <div class="receipe-duration">
                                <h6>Prep: {{ $recipe->prep_time }} {{ Str::plural('min', $recipe->prep_time) }}</h6>
                                <h6>Cook: {{ $recipe->cook_time }} {{ Str::plural('min', $recipe->cook_time) }}
                                </h6>
                                <h6>Serves: {{ $recipe->serves }} </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="receipe-ratings text-right my-5">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            {{-- <a href="#" class="btn delicious-btn">For Begginers</a> --}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8">
                        <!-- Single Preparation Step -->
                        <div class="single-preparation-step ">
                            <p>{!! $recipe->body !!}</p>


                        </div>

                    </div>

                    @if (count($recipe->getIngredients()))
                        <!-- Ingredients -->
                        <div class="col-12 col-lg-4">
                            <div class="ingredients">
                                <h4>Ingredients</h4>
                                <ul>
                                    @foreach ($recipe->getIngredients() as $ingredient)
                                        <li>{{ $ingredient }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-left mb-5">
                            <h3>Leave a comment</h3>
                        </div>
                    </div>
                </div>

                @include('partials.comment-form')


                <div class="row" id="comments">
                    <div class="col-md-8 mt-5">
                        @foreach ($comments as $comment)
                            <x-comment :comment="$comment" />
                        @endforeach
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
