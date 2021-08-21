@props(['heading'])
<!-- ##### Best Receipe Area Start ##### -->
<section class="best-receipe-area mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>{{ $heading }}</h3>
                </div>
            </div>
        </div>
        {{ $slot }}
    </div>
</section>
