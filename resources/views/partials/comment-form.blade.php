@auth
    <div class="row">
        <div class="col-8">
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
                            <button class="btn delicious-btn mt-30" type="submit">Post Comments</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endauth
