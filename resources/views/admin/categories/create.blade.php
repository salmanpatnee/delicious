<x-layout>
    @section('js')
        <script type="text/javascript">
            $(document).ready(function() {

                function getSlug(str) {

                    str = str.replace(/[^a-zA-Z0-9\s]/g, "");
                    str = str.toLowerCase();
                    str = str.replace(/\s/g, '-');
                    return str;
                }

                $("#name").keyup(function() {
                    var title = $(this).val();
                    $('#slug').val(getSlug(title))
                });

                $('.ckeditor').ckeditor();


            });
        </script>
    @endsection
    <div class="container">
        <div class="col-12">
            <div class="align-items-center d-flex elements-title justify-content-between mb-70">
                <h2 class="mb-0">Add New Category</h2>
                <a href="{{ route('admin.categories') }}" class="btn btn-sm delicious-btn">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto mb-5 contact-form-area">
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
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
                    <div class="col-12 text-center">
                        <button class="btn delicious-btn mt-30" type="submit">Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
