<x-layout>
    <main class="container">
        <div class="section-heading">
            <h3>Register</h3>
        </div>
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="contact-form-area">
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                    value="{{ old('name') }}" required>
                                <x-form.error name="name" />
                            </div>
                            <div class="col-lg-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail"
                                    value="{{ old('email') }}" required>
                                <x-form.error name="email" />
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="Username" value="{{ old('username') }}" required>
                                <x-form.error name="username" />
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" required>
                                <x-form.error name="password" />
                            </div>
                            <div class="col-12 text-center mb-2">
                                <button class="btn delicious-btn mt-30" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
</x-layout>
