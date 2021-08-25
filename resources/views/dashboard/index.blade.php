<x-layout>
    <div class="container">
        <div class="col-12">
            <div class="elements-title mb-80">
                <h2>Dashboard</h2>
            </div>
        </div>

        <div class="col-12">
            <div class="delicious-cool-facts-area">
                <div class="row">
                    <!-- Single Cool Fact -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-cool-fact">
                            <a href="{{ route('admin.recipes') }}">
                                <img src="img/core-img/salad.png" alt="">
                                <h3><span class="counter">{{ $recipesCount }}</span></h3>
                                <h6>Amazing {{ Str::plural('Recipe', $recipesCount) }}</h6>
                            </a>
                        </div>
                    </div>

                    <!-- Single Cool Fact -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-cool-fact">
                            <a href="{{ route('admin.categories') }}">
                                <img src="img/core-img/categories.png" alt="">
                                <h3><span class="counter">{{ $categoriesCount }}</span></h3>
                                <h6>{{ Str::plural('Category', $categoriesCount) }}</h6>
                            </a>
                        </div>
                    </div>

                    <!-- Single Cool Fact -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-cool-fact">
                            <a href="{{ route('admin.users') }}">
                                <img src="img/core-img/users.png" alt="">
                                <h3><span class="counter">{{ $usersCount }}</span></h3>
                                <h6>{{ Str::plural('User', $usersCount) }}</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout>
