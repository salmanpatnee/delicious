<x-layout>
    @section('styles')
        <style>
            .comment {
                background-color: #F3F4F6;
                border-radius: 15px;
                border: 1px solid rgba(229, 231, 235, 1);
            }

        </style>
    @endsection
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay"
        style="background-image: url({{ asset('img/bg-img/breadcumb3.jpg') }});">
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
                                    <option @click="console.log('Clicked')"
                                        value="{{ route('categories.index', $category->slug) }}">
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
                        <img src="{{ asset('img/bg-img/bg5.jpg') }}" alt="">
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
                        <div class="single-preparation-step d-flex">
                            <p>{!! $recipe->body !!}</p>

                            {{-- <h4>01.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui.
                                Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in
                                iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus.
                                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </p> --}}
                        </div>

                    </div>

                    <!-- Ingredients -->
                    <div class="col-12 col-lg-4">
                        <div class="ingredients">
                            <h4>Ingredients</h4>

                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">4 Tbsp (57 gr) butter</label>
                            </div>

                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">2 large eggs</label>
                            </div>

                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">2 yogurt containers granulated
                                    sugar</label>
                            </div>

                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">1 vanilla or plain yogurt, 170g
                                    container</label>
                            </div>

                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">2 yogurt containers unbleached
                                    white flour</label>
                            </div>

                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6">1.5 yogurt containers
                                    milk</label>
                            </div>

                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">1/4 tsp cinnamon</label>
                            </div>

                            <!-- Custom Checkbox -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8">1 cup fresh blueberries </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-left mb-5">
                            <h3>Leave a comment</h3>
                        </div>
                    </div>
                </div>

                @include('partials.comment-form')


                <div class="row">
                    <div class="mt-5">
                        <div class="d-flex">
                            <div class="col-md-8">
                                @foreach ($comments as $comment)
                                    <x-comment :comment="$comment" />
                                @endforeach
                                {{ $comments->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
