@auth
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <div class="contact-form-area">
                <form action={{ route('comments.store', $recipe) }} method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <textarea name="body" class="form-control" id="body" cols="10" rows="4" placeholder="Comment"
                                required></textarea>
                        </div>
                        @error('body')
                            <div class="col-12">
                                <x-form.error name="body" />
                            </div>
                        @enderror

                        <div class="col-12">
                            <button class="btn delicious-btn mt-30" type="submit">Publish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@else
    <p style="font-size:16px"><a style="font-size:16px" href="{{ route('login') }}"><u>Login</u></a> to participate</p>
@endauth
