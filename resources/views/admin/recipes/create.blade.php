<x-layout>
    <div class="container">
        <div class="col-12">
            <div class="align-items-center d-flex elements-title justify-content-between mb-70">
                <h2 class="mb-0">Add New Recipe</h2>
                <a href="{{ route('admin.recipes') }}" class="btn btn-sm delicious-btn">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto mb-5 contact-form-area">
                <form action="{{ route('admin.recipes') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
                        @error('slug')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
                        @error('body')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                        @error('thumbnail')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="prep_time">Prep Time</label>
                        <input type="number" name="prep_time" id="prep_time" class="form-control">
                        @error('prep_time')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cook_time">Cook Time</label>
                        <input type="text" name="cook_time" id="cook_time" class="form-control">
                        @error('cook_time')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cook_time">Serves</label>
                        <select class="form-control" name="serves" id="serves">
                            <option value="">Select Serve</option>
                            @foreach (range(1, 5) as $serve)
                                <option value="{{ $serve }}">{{ $serve }}</option>
                            @endforeach
                        </select>
                        @error('cook_time')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn delicious-btn mt-30" type="submit">Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
