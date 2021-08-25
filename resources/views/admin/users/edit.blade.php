<x-layout>
    <div class="container">
        <div class="col-12">
            <div class="align-items-center d-flex elements-title justify-content-between mb-70">
                <h2 class="mb-0">Edit User</h2>
                <a href="{{ route('admin.users') }}" class="btn btn-sm delicious-btn">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto mb-5 contact-form-area">
                <form action="{{ route('admin.users.update', $user) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $user->name) }}">
                        @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email', $user->email) }}">
                        @error('email')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            value="{{ old('username', $user->username) }}">
                        @error('username')
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
