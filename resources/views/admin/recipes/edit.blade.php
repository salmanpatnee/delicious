<x-layout>
    @section('js')
        <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>
    @endsection
    <div class="container">
        <div class="col-12">
            <div class="align-items-center d-flex elements-title justify-content-between mb-70">
                <h2 class="mb-0">Edit Recipe</h2>
                <a href="{{ route('admin.recipes') }}" class="btn btn-sm delicious-btn">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto mb-5 contact-form-area">
                <form class="admin" action="{{ route('admin.recipes.update', $recipe) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $recipe->title) }}">
                        @error('title')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug"
                            value="{{ old('slug', $recipe->slug) }}">
                        @error('slug')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option
                                    {{ old('category_id', $recipe->category_id) == $category->id ? 'selected' : '' }}
                                    value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Steps</label>
                        <textarea class="form-control ckeditor" id="body"
                            name="body">{{ old('body', $recipe->body) }}</textarea>
                        @error('body')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ingredients">Ingredients</label>
                        <textarea class="form-control" id="ingredients"
                            name="ingredients">{{ old('ingredients', $recipe->ingredients) }}</textarea>
                        <small class="form-text text-muted">Add comma seperated list of the ingredients. e.g. 2 Eggs,
                            Milk</small>
                        @error('ingredients')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="d-flex d-flex justify-content-between">
                            <div>
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" name="thumbnail" id="thumbnail" class="form-control"
                                    value="{{ old('thumbnail', $recipe->thumbnail) }}">
                                <small class="form-text text-muted">Recommended size is 1000x860</small>
                            </div>
                            <div>
                                <img src="{{ $recipe->getThumbnail() }}" width="160" class="img-thumbnail" alt="">
                            </div>

                        </div>

                        @error('thumbnail')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="d-flex d-flex justify-content-between">
                            <div>
                                <label for="banner">Banner</label>
                                <input type="file" name="banner" id="banner" class="form-control"
                                    value="{{ old('banner', $recipe->banner) }}">
                                <small class="form-text text-muted">Recommended size is 1920x725</small>
                            </div>
                            <div>
                                <img src="{{ $recipe->getThumbnail('banner') }}" width="160" class="img-thumbnail"
                                    alt="">
                            </div>

                        </div>

                        @error('banner')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="serves">Serves</label>
                        <select class="form-control" name="serves" id="serves">
                            <option value="">Select Serve</option>
                            @foreach (range(1, 5) as $serve)
                                <option {{ old('serves', $recipe->serves) == $serve ? 'selected' : '' }}
                                    value="{{ $serve }}">
                                    {{ $serve }}
                                </option>
                            @endforeach
                        </select>
                        @error('serves')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="prep_time">Prep Time</label>
                        <input type="number" name="prep_time" id="prep_time" class="form-control"
                            value="{{ old('prep_time', $recipe->prep_time) }}">
                        @error('prep_time')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cook_time">Cook Time</label>
                        <input type="number" name="cook_time" id="cook_time" class="form-control"
                            value="{{ old('cook_time', $recipe->cook_time) }}">
                        @error('cook_time')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-12 text-center">
                        <button class="btn delicious-btn mt-30" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
