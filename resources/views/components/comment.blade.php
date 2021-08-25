@props(['comment'])

<div class="media px-4 py-3 mb-4 comment">
    <img class="align-self-center mr-3 img-fluid rounded-circle"
        src="https://i.pravatar.cc/100?u={{ $comment->author->email }}" alt="Generic placeholder image">
    <div class="media-body">
        <h5 class="mt-0">{{ $comment->author->name }}</h5>
        <span class="date text-black-50">Posted on -
            {{ $comment->created_at->format('M d, Y') }}</span>
        <p class="comment-text text-dark">{{ $comment->body }}</p>
    </div>
</div>

{{-- <div class="d-flex flex-column comment-section w-100">
    <div class="px-4 py-3 mb-4 comment">
        <div class="d-flex flex-row user-info">
            <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
            <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">
                    {{ $comment->author->name }}
                </span><span class="date text-black-50">Posted on -
                    {{ $comment->created_at->format('M d, Y') }}</span>
            </div>
        </div>
        <div class="mt-2">
            <p class="comment-text text-dark">{{ $comment->body }}</p>
        </div>
    </div>
</div> --}}
