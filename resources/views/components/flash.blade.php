@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="flash rounded position-fixed bg-success text-light py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p class="text-light mb-0">{{ session('success') }}</p>
    </div>
@endif
